document.addEventListener('DOMContentLoaded', function() {

    // Show payment section when user clicks "Pay Now"
    document.getElementById('pay-now-btn').addEventListener('click', function() {
        document.getElementById('payment-section').style.display = 'block';
        this.style.display = 'none'; // hide "Pay Now" button
        renderPayPalButton();
    });

    function renderPayPalButton() {
        document.getElementById('paypal-button-container').innerHTML = '';

        paypal.Buttons({
            createOrder: async function(data, actions) {
                const amount = document.getElementById('amount').value;
                const res = await fetch('paypal/create_order.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    body: new URLSearchParams({amount: amount})
                });
                const order = await res.json();
                return order.id;
            },
            onApprove: async function(data, actions) {
                const res = await fetch('/paypal/capture_order.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    body: new URLSearchParams({orderID: data.orderID})
                });
                const details = await res.json();
                alert('Transaction completed by ' + details.payer.name.given_name);
                console.log(details);
            },
            onError: function(err) {
                console.error(err);
                alert('Payment failed!');
            }
        }).render('#paypal-button-container');
    }

});
