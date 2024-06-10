<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paystack Payment</title>
</head>
<body>
    <form id="paymentForm">
        <div>
            <label for="email">Email</label>
            <input type="email" id="email-address" required>
        </div>
        <div>
            <label for="amount">Amount</label>
            <input type="tel" id="amount" required>
        </div>
        <div>
            <button type="button" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form>

    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script>
        function payWithPaystack() {
            var handler = PaystackPop.setup({
                key: 'YOUR_PUBLIC_KEY', // Replace with your public key
                email: document.getElementById('email-address').value,
                amount: document.getElementById('amount').value * 100, // the amount value is in kobo
                currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
                callback: function(response) {
                    // handle successful transaction here
                    var reference = response.reference;
                    alert('Payment complete! Reference: ' + reference);
                    window.location = "verify_transaction.php?reference=" + reference;
                },
                onClose: function() {
                    alert('Transaction was not completed, window closed.');
                },
            });
            handler.openIframe();
        }
    </script>
</body>
</html>



<?php
// verify_transaction.php

if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];

    $secret_key = "YOUR_SECRET_KEY"; // Replace with your secret key

    $url = "https://api.paystack.co/transaction/verify/" . $reference;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $secret_key"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response);

    if ($result->status) {
        // Payment was successful
        $amount = $result->data->amount / 100; // Amount in Naira
        $transactionDate = $result->data->transaction_date;
        $transactionStatus = $result->data->status;
        $reference = $result->data->reference;
        $paymentMethod = $result->data->channel;

        echo "Transaction was successful. Amount: $amount, Date: $transactionDate, Status: $transactionStatus, Reference: $reference, Payment Method: $paymentMethod";
    } else {
        // Payment failed
        echo "Transaction failed. Status: " . $result->message;
    }
} else {
    echo "No reference supplied";
}
?>
