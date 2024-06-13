

<?php
// verify_transaction.php

if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];

    $secret_key = "sk_test_5625633149fa467dad07b80c7b4dae6be1ddddf7"; // Replace with your secret key

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
