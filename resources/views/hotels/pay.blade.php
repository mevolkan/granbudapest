@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Replace "test" with your own sandbox Business account app client ID -->
        <script src="https://www.paypal.com/sdk/js?client-id=ATRyO2LH2ZlPGTebHnHrrL1-c0hW58DXa5Pblo-goKxwW6puqxWYmfMT3koF1Oax0CQo6uHccrZ8Cehg&currency=USD"></script>
        <!-- Set up a container element for the button -->
        <div id="paypal-button-container"></div>
        <script>
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{ Session::get('price') }}' // Can also reference a variable or function
                            }
                        }]
                    });
                },
                // Finalize the transaction after payer approval
                onApprove: (data, actions) => {
                    return actions.order.capture().then(function(orderData) {

                        window.location.href = 'http://127.0.0.1:8000/hotels/success';
                    });
                }
            }).render('#paypal-button-container');
        </script>

    </div>
@endsection
