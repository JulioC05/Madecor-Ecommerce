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

class MercadoPagoService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $key;

    protected $secret;

    protected $baseCurrency;

    protected $converter;

    public function __construct(CurrencyConversionService $converter)
    {
        $this->baseUri = config('services.mercadopago.base_uri');
        $this->key = config('services.mercadopago.key');
        $this->secret = config('services.mercadopago.secret');
        $this->baseCurrency = config('services.mercadopago.base_currency');

        $this->converter = $converter;
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $queryParams['access_token'] = $this->resolveAccessToken();
    }   

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {   
        return $this->secret;
    }

    public function handlePayment(Request $request)
    {
        $request->validate([
            'card_network' => 'required',
            'card_token' => 'required',
            'email' => 'required',
            'streetname' => 'required',
            'streetnumber' => 'required',
            'zipcode' => 'required',
            'cityname' => 'required',
            'statename' => 'required',
        ]);

        $payment = $this->createPayment(
            $request->value,
            $request->card_network,
            $request->card_token,
            $request->email,
            $request->streetname,
            $request->streetnumber,
            $request->zipcode,
            $request->cityname,
            $request->statename
        );

        if ($payment->status === "approved") {
            $id = $payment->id;
            $name = $payment->payer->email;
            $number = $payment->payer->identification->number;
            $currency = strtoupper($payment->currency_id);
            $amount = number_format($payment->transaction_amount, 0, ',', '.');

            $street_name = $payment->additional_info->shipments->receiver_address->street_name;
            $street_number = $payment->additional_info->shipments->receiver_address->street_number;
            $zip_code = $payment->additional_info->shipments->receiver_address->zip_code;
            $city_name = $payment->additional_info->shipments->receiver_address->city_name;   
            $state_name = $payment->additional_info->shipments->receiver_address->state_name;

            $oldCart = Session::has('cart')? Session::get('cart'):null;
            $cart = new Cart($oldCart);

            $order = new Order();

            $order->name = $name;
            $order->address = "$street_name "."$street_number "."$zip_code "."$city_name "."$state_name ";
            $order->cart = serialize($cart);
            $order->payment_id = $id;
            $order->payment_gateway = "MercadoPago";

            $order->save();
            $orders = Order::where('payment_id', $id)->get();

            $orders->transform(function($order, $key){
                $order->cart = unserialize($order->cart);
    
                return $order;
                });

            $email = Session::get('client')->email;
    
            Mail::to($email)->send(new SendMail($orders));
            
            Session::forget('cart');
            return redirect('/shop')
                ->with('success', ['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment."]);
        }

        return redirect('/checkout')
            ->withErrors('We were unable to confirm your payment. Try again, please');
    }

    public function handleApproval()
    {
        //
    }

    public function createPayment($value, $cardNetwork, $cardToken, $email, $streetname, $streetnumber,$zipcode, $cityname, $statename)
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
            '/v1/payments',
            [],
            [
                'payer' => [
                    'email' => $email,
                ],
                'additional_info' => [
                    'shipments' => [
                        'receiver_address' => [
                            'street_name' => $streetname,
				            'street_number'=> $streetnumber,
				            'zip_code' => $zipcode,
				            'city_name' => $cityname,
				            'state_name' => $statename,
                        ],
                    ],
                ],
                'binary_mode' => true,
                'transaction_amount' =>round($value * $this->resolveFactor("PEN"), 2),
                'payment_method_id' => $cardNetwork,
                'token' => $cardToken,
                'installments' => 1,
                'statement_descriptor' => config('app.name'),
            ],
            [],
            $isJsonRequest = true,
        );
    }

    public function resolveFactor($currency) 
    {
        return $this->converter->convertCurrency($currency, $this->baseCurrency);
    }
}