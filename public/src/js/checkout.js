var stripe = Stripe('pk_test_51HsMlFFe1ynY4wsPwcXHPik8D95u2aY9cpJznuUh5wW8G5Cze649P9FR1MsLS26bJkYi4YpEDVMA8Kjt3QA1GZeF00DsdpJFYK');
var elements = stripe.elements();

var $form = $('#checkout-form');

$form.submit(function(event){
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    return false;   
});

function stripeResponseHandler(status, response){
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken"/>').val(token));    
        
        // submit the form:
        $form.get(0).submit();
        
    }
};

// Custom styling can be passed to options when creating an Element.
var style = {
    base: {
      // Add your base input styles here. For example:
      fontSize: '16px',
      color: '#32325d',
    },
  };
  
  // Create an instance of the card Element.
  var card = elements.create('card', {style: style});
  // Add an instance of the card Element into the `card-element` <div>.
  card.mount('#cardElement');