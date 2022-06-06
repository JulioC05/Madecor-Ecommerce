<div class="align-items-end form-row">
    
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                    <input class="form-control" type="text" data-checkout="cardholderName" >
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="fullname">Email</label>
                    <input class="form-control" type="email" data-checkout="cardholderEmail"  name="email">
                    </div>
            </div>
    
</div>
<div class="align-items-end form-row">
    
            <div class="col-md-9">
                    <div class="form-group">
                        <label for="streetname">Street Name</label>
                    <input class="form-control" type="text" name="streetname" >
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <label for="streetnumber">Street Number</label>
                    <input class="form-control" type="text" name="streetnumber">
                    </div>
            </div>
    
</div>
<div class="align-items-end form-row">
    
            <div class="col-md-3">
                    <div class="form-group">
                        <label for="zipcode">Zip Code</label>
                    <input class="form-control" type="text" name="zipcode" >
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="cityname">City Name</label>
                    <input class="form-control" type="text" name="cityname">
                    </div>
            </div>
            <div class="col-md-5">
                    <div class="form-group">
                        <label for="statename">State Name</label>
                    <input class="form-control" type="text" name="statename" >
                    </div>
            </div>
    
</div>
<div class="align-items-end form-row">
    
            <div class="col-md-8">
                    <div class="form-group">
                        <label for="fullname">Card Number</label>
                    <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber">
                    </div>
            </div>
            <div class="col-md-1">
                    <div class="form-group">
                        <label for="fullname">MM</label>
                    <input class="form-control" type="text" data-checkout="cardExpirationMonth">
                    </div>
            </div>
            <div class="col-md-1">
                    <div class="form-group">
                        <label for="fullname">YY</label>
                    <input class="form-control" type="text" data-checkout="cardExpirationYear">
                    </div>
            </div>
            <div class="col-md-2">
                    <div class="form-group">
                        <label for="fullname">CVV</label>
                    <input class="form-control" type="text" data-checkout="securityCode">
                    </div>
            </div>
            
    
</div>
<div class="align-items-end form-row">
    
    <div class="col-md-2">
        <div class="form-group">
        <label for="doctype">Tipo</label>
            <select class="form-control" data-checkout="docType"></select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="doctype">Documento</label>
            <input class="form-control" type="text" data-checkout="docNumber">
        </div>
    </div>
    
</div>

<div class="form-group form-row">
    <div class="col">
        <small class="form-text text-muted" role="alert">Your payment will be converted to {{ strtoupper(config('services.mercadopago.base_currency')) }}</small>
    </div>
</div>

<div class="form-group form-row">
    <div class="col">
        <small class="form-text text-danger" id="paymentErrors" role="alert"></small>
    </div>
</div>

<input type="hidden" id="cardNetwork" name="card_network">
<input type="hidden" id="cardToken" name="card_token">

@push('scripts')
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script>
    const mercadoPago = window.Mercadopago;

    mercadoPago.setPublishableKey('{{ config('services.mercadopago.key') }}');

    mercadoPago.getIdentificationTypes();

</script>

<script>
    

    document.getElementById('cardNumber').addEventListener('change', guessPaymentMethod);

    function guessPaymentMethod(event) {
       let cardnumber = document.getElementById("cardNumber").value;
       if (cardnumber.length >= 6) {
           let bin = cardnumber.substring(0,6);
           window.Mercadopago.getPaymentMethod({
               "bin": bin
           }, setPaymentMethod);
       }
    };
    
    function setPaymentMethod(status, response) {
       if (status == 200) {
           let paymentMethod = response[0];
           document.getElementById('cardNetwork').value = paymentMethod.id;
    
           
       } else {
           const errors = document.getElementById("paymentErrors");

                    errors.textContent = response.message;
       }
    }
</script>

<script>
    

    
   const mercadoPagoForm = document.getElementById("paymentForm");

    mercadoPagoForm.addEventListener('submit', function(e) {
        if (mercadoPagoForm.elements.payment_platform.value === "{{ $paymentPlatform->id }}") {
            e.preventDefault();

            mercadoPago.createToken(mercadoPagoForm, function(status, response) {
                if (status != 200 && status != 201) {
                    const errors = document.getElementById("paymentErrors");

                    errors.textContent = response.cause[0].description;
                } else {
                    const cardToken = document.getElementById("cardToken");

                    
                    cardToken.value = response.id;

                    mercadoPagoForm.submit();
                }
            });
        }
    });

    
</script>

@endpush