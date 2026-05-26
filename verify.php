<?php
$clientId = "TEST1077471140df445a8a978a8b733011747701";
$clientSecret = "cfsk_ma_test_6a009c9be5c3614d3e1833972cad2190_eb9de27d";

$orderId = $_GET['order_id'];

$ch = curl_init("https://sandbox.cashfree.com/pg/orders/$orderId");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-client-id: $clientId",
    "x-client-secret: $clientSecret"
]);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

if ($data['order_status'] === 'PAID') {
    echo "<h2>✅ Payment Successful for Order: $orderId</h2>";
} else {
    echo "<h2>❌ Payment Failed for Order: $orderId</h2>";
}
