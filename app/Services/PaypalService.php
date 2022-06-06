<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;
use App\Cart;
use Session;
use App\Order;
use App\Client;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Mail; 
use App\MAil\sendMail;

class PaypalService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $clientId;

    protected $clientSecret;

    protected $converter;

    public function __construct(CurrencyConversionService $converter)
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');

        $this->converter = $converter;
    }

    public function resolveAuthorization(&$queryPärams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }   

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {   
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {   
        $order = $this->createOrder($request->value);

        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);

        return redirect($approve->href);
    }

    public function handleApproval()
    {
        if(session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');

            $payment = $this->capturePayment($approvalId);

            $id = $payment->id;
            $name = $payment->payer->name->given_name;

            $address1 = $payment->purchase_units[0]->shipping->address->address_line_1;
            //$address2 = $payment->purchase_units[0]->shipping->address->address_line_2;
            $area_2 = $payment->purchase_units[0]->shipping->address->admin_area_2;
            $area_1 = $payment->purchase_units[0]->shipping->address->admin_area_1;
            $postcode = $payment->purchase_units[0]->shipping->address->postal_code;
            $countcode = $payment->purchase_units[0]->shipping->address->country_code;

            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            $amount = $payment->value;
            $currency = $payment->currency_code;

            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);
            
            $order = new Order();

            $order->name = $name;
            $order->address = "$address1 "."$area_2 "."$area_1 "."$postcode "."$countcode ";
            $order->cart = serialize($cart);
            $order->payment_id = $id;
            $order->payment_gateway = "Paypal";

            $order->save();
            $orders = Order::where('payment_id', $id)->get();
    
    
            $orders->transform(function($order, $key){
                $order->cart = unserialize($order->cart);
    
                return $order;
                });

            $email = Session::get('client')->email;
    
            Mail::to($email)->send(new SendMail($orders));
            
            Session::forget('cart');
            return redirect('/shop')->with('success', ['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment"]);
        }

        return redirect('/checkout')
            ->with('We cannot capture payment. Try again, please');
    }

    public function createOrder($value)
    {   

        if(!Session::has('cart')){
            return redirect::to('/cart'); 
            // , ['Products' => null]           
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        $value = $cart->totalPrice;

        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => "USD",
                            'value' => round($value * $this->resolveFactor("PEN"), 2) ,
                        ]
                    ]
                ],
                 'application_context' => [
                     'brand_name' => config('app.name'),
                     'shipping_preference' => 'GET_FROM_FILE',
                     'user_action' => 'PAY_NOW',
                     'return_url' => route('approval'),
                     'cancel_url' => route('cancelled'),
                 ]
            ],
            [],
            $isJsonResquest = true,
        );
    }

    public function capturePayment($approvalId)
    {   
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [   
                'Content-Type' => 'application/json',
            ],
        );
    }

    public function resolveFactor($currency) 
    {
        return $this->converter->convertCurrency($currency, "USD");
    }
}