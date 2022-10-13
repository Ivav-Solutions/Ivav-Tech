<!DOCTYPE html>
<html lang="en">

<head>
    <title>Example Payment Form</title>
</head>

<body>
    <form method="post">
        <label for="id1">Name:</label>
        <div><input id="id1" data-card-details="cardholder-name"></div>
        <label for="id2">Card:</label>
        <div><input id="id2" data-card-details="card-number"></div>
        <label for="id3">Expiry:</label>
        <div><input id="id3" data-card-details="expiry-date"></div>
        <label for="id4">CVV:</label>
        <div><input id="id4" data-card-details="security-code"></div>
        <input type="hidden" name="card-identifier">
        <div><button type="submit">Pay Now</button></div>
    </form>
    <script src="https://pi-test.opayo.co.uk/api/v1/js/sagepay.js"></script>
    <script>
        document.querySelector('[type=submit]').addEventListener('click', function(e) {
            e.preventDefault(); // to prevent form submission
            sagepayOwnForm({
                merchantSessionKey: 'FC71C349-3AFE-44CF-915D-7E0A46375B41'
            }).tokeniseCardDetails({
                cardDetails: {
                    cardholderName: document.querySelector('[data-card-details="cardholder-name"]').value,
                    cardNumber: document.querySelector('[data-card-details="card-number"]').value,
                    expiryDate: document.querySelector('[data-card-details="expiry-date"]').value,
                    securityCode: document.querySelector('[data-card-details="security-code"]').value
                },
                onTokenised: function(result) {
                    if (result.success) {
                        document.querySelector('[name="card-identifier"]').value = result.cardIdentifier;
                        document.querySelector('form').submit();
                    } else {
                        alert(JSON.stringify(result));
                    }
                }
            });
        }, false)
    </script>
</body>

</html>