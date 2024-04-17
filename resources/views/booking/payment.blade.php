@extends('layouts.app')
@section('content')
    <form onsubmit="makePayment()" id="payment-form">
        <ul class=" form">
            <li>
                <label>Full Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ $name }}" class="field-divided"
                    placeholder="First" />&nbsp;

                {{-- <input type="text" id="js-lastName" name="lastName" class="field-divided" placeholder="Last" /> --}}
            </li>
            <li>
                <label>Email <span class="required">*</span></label>
                <input type="email" id="js-email" value="{{ $email }}" name="email" class="field-long" />
            </li>
            <li>
                <label>Narration <span class="required">*</span></label>
                <input type="text" id="js-narration" name="narration" class="field-long" />
            </li>
            <li>
                <label>Amount <span class="required">*</span></label>
                <input type="number" id="js-amount" name="amount" value="{{ $amount }}" class="field-long" />
            </li>
            <li>
                <input type="button" onclick="makePayment()" value="Pay" />
            </li>
        </ul>
    </form>
    <script type="text/javascript" src="https://login.remita.net/payment/v1/remita-pay-inline.bundle.js"></script>





    <script>
        function makePayment() {
            var form = document.querySelector("#payment-form");

            var cUrl = "{{ route('payment.callbackdata') }}?";
            var pubKey = "{{ env('REMITA_PUBLIC_KEY') }}";

            var handler = RmPaymentEngine.init({
                key: pubKey,

                // Replace with public key
                customerId: "jefferson@ighalo.com", // Replace with customer id

                transactionId: "67897006679100998378", // Replace with transaction id

                // firstName: form.querySelector('input[name="firstName"]').value,
                // lastName: form.querySelector('input[name="lastName"]').value,
                // email: form.querySelector('input[name="email"]').value,
                // amount: form.querySelector('input[name="amount"]').value,
                // narration: form.querySelector('input[name="narration"]').value,

                extendedData: { // Optional field. Details are available in the table
                    customFields: [{
                        name: "rrr",
                        value: "340007777362"
                    }],
                    recurring: [{
                        "endDate": 1561935600000,
                        "frequency": "MON",
                        "maxUploadLimit": 0,
                        "numberOfTimes": 0,
                        "startDate": 1561478053677
                    }]
                },
                onSuccess: function(
                    response) { // Function call for use after the transaction has processed successfully
                    console.log('callback Successful Response', response);
                },
                onError: function(response) {
                    Function call
                    for use
                    if the transaction fails
                    console.log('callback Error Response', response);
                },
                onClose: function() { // Function call for use if the customer closes the transaction without completion
                    console.log("closed");
                }
            });
            handler.openIframe();
        }

        // window.onload =
        //     function() { // Optional. This function is passed when the integration is at the demo stage and can be removed immediately for live.
        //         setDemoData();
        //     };
    </script>
@endsection
