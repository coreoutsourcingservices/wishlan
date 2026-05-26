<?php
// create_order.php
$clientId = "AUzbeD6pdhC3lq62zqgTZNwd7SRJglGCy2hf0YnNHWjfBF7AlDbdLXJHnerQeeI28d4yNo99GOPGFqxX";
$secret   = "ELNiuktV1cLpbUKmaFmENfftCpfkUbQMwOwRXNAGktZ4mVMKghOhhKa4OCfnkFipl67Vl-pyezms7G_N";

// Read POST JSON from JS
$input = json_decode(file_get_contents("php://input"), true);
$price = isset($input['price']) ? $input['price'] : "0.00";
$plan  = isset($input['plan']) ? $input['plan'] : "Custom Package";

// Step 1: Get Access Token
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
$response = curl_exec($ch);
if (!$response) { die("Error: " . curl_error($ch)); }
$accessToken = json_decode($response)->access_token;
curl_close($ch);

// Step 2: Create Order
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v2/checkout/orders");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $accessToken",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "intent" => "CAPTURE",
    "purchase_units" => [[
        "amount" => [
            "currency_code" => "USD",
            "value" => $price
        ],
        "description" => $plan . " Package"
    ]],
    "application_context" => [
        "return_url" => "https://wishlan.com/paypal/payment-success.php",
        "cancel_url" => "https://wishlan.com/paypal/payment-cancel.php"
    ]
]));

$response = curl_exec($ch);
curl_close($ch);

// Return raw PayPal response
header('Content-Type: application/json');
echo $response;
