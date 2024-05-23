var stripe = Stripe('pk_test_51PDubeP7TyiYxzEqZP2pFKGwEmuHaoGylV9ARzHbJO7zozcfPjA12FDnZAw1QWwYx1NmktfYKvwBggTXujaEtVyz008F1EClU1');

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken('card', {
        card: {
            number: document.getElementById('card_number').value,
            exp_month: document.getElementById('expiry_month').value,
            exp_year: document.getElementById('expiry_year').value,
            cvc: document.getElementById('cvc').value
        }
    }).then(function(result) {
        if (result.error) {
            console.error(result.error.message);
        } else {
            var tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'stripeToken');
            tokenInput.setAttribute('value', result.token.id);
            form.appendChild(tokenInput);
            form.submit();
        }
    });
});
