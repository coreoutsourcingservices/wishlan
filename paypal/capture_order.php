<?php
$clientId = "AUzbeD6pdhC3lq62zqgTZNwd7SRJglGCy2hf0YnNHWjfBF7AlDbdLXJHnerQeeI28d4yNo99GOPGFqxX";
$secret = "ELNiuktV1cLpbUKmaFmENfftCpfkUbQMwOwRXNAGktZ4mVMKghOhhKa4OCfnkFipl67Vl-pyezms7G_N";

$orderId = $_GET['token']; // From PayPal return_url

// Get Access Token
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
$response = curl_exec($ch);
$accessToken = json_decode($response)->access_token;
curl_close($ch);

// Capture payment
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v2/checkout/orders/$orderId/capture");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $accessToken",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);

$response = curl_exec($ch);
$payment = json_decode($response, true);
curl_close($ch);

// Show result
if (isset($payment['status']) && $payment['status'] === "COMPLETED") {
    echo "<h2>Payment Successful ✅</h2>";
    echo "<pre>" . print_r($payment, true) . "</pre>";
} else {
    echo "<h2>Payment Failed ❌</h2>";
}
?>
