<?php
$clientId = "1059165703c9aa1aa00c9cdeade5619501";
$clientSecret = "cfsk_ma_prod_b814741a0e8f33d18ae8893591f126a3_f874f713";

$apiUrl = "https://api.cashfree.com/pg/orders";

$amount = isset($_GET['amount']) ? floatval($_GET['amount']) : 100;


$orderId = "order_" . rand(1111, 9999);
$orderData = [
    "order_id" => $orderId,
    "order_amount" => $amount,
    "order_currency" => "INR",
    "customer_details" => [
        "customer_id" => "cust_001",
        "customer_email" => "test@example.com",
        "customer_phone" => "9999999999"
    ],
    "order_meta" => [
        "return_url" => "https://www.wishlan.com/verify.php?order_id={$orderId}"
    ]
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-client-id: $clientId",
    "x-client-secret: $clientSecret",
    "x-api-version: 2022-09-01",  // ✅ IMPORTANT FIX
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
