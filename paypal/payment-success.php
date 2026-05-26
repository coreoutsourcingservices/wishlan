<?php
// payment-success.php

// Check if PayPal sent token
$orderId = isset($_GET['token']) ? htmlspecialchars($_GET['token']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Success - Wishlan</title>
  <style>
    body { background:#f7fff7; font-family: Arial, sans-serif; text-align:center; padding:50px; }
    .box { background:#fff; padding:40px; border-radius:10px; display:inline-block; box-shadow:0 0 10px rgba(0,0,0,0.1); }
    h1 { color:#28a745; }
    a { display:inline-block; margin-top:20px; text-decoration:none; background:#28a745; color:#fff; padding:10px 20px; border-radius:5px; }
    a:hover { background:#218838; }
  </style>
</head>
<body>
  <div class="box">
    <h1>✅ Payment Successful!</h1>
    <p>Thank you for your payment. Your transaction has been completed.</p>
    <?php if ($orderId): ?>
      <p><strong>PayPal Order ID:</strong> <?php echo $orderId; ?></p>
    <?php endif; ?>
    <a href="https://wishlan.com">Back to Home</a>
  </div>
</body>
</html>
