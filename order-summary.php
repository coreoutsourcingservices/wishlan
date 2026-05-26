<?php
// ---------- PLAN PRICE LIST (B2B & B2C) ----------
$plans = [
    // B2B Entry Level
    "basic_listing" => ["name" => "Basic Listing Plan", "price" => 4999, "duration" => "6 months"],
    "starter_connect" => ["name" => "Starter Connect Plan", "price" => 9999, "duration" => "1 year"],
    "growth" => ["name" => "Growth Plan", "price" => 14999, "duration" => "1 year"],
    // B2B Mid-Range
    "smart_seller" => ["name" => "Smart Seller Plan", "price" => 24999, "duration" => "1 year"],
    "pro_seller" => ["name" => "Pro Seller Plan", "price" => 39999, "duration" => "1 year"],
    "business_booster" => ["name" => "Business Booster Plan", "price" => 59999, "duration" => "1 year"],
    // B2B Premium
    "exporter_connect" => ["name" => "Exporter Connect Plan", "price" => 79999, "duration" => "1 year"],
    "platinum_growth" => ["name" => "Platinum Growth Plan", "price" => 119999, "duration" => "1 year"],
    "elite_enterprise" => ["name" => "Elite Enterprise Plan", "price" => 149999, "duration" => "1 year"],
    "corporate_dominator" => ["name" => "Corporate Dominator Plan", "price" => 249999, "duration" => "1 year"],

    // B2C Entry Level
    "basic_visibility" => ["name" => "Basic Visibility", "price" => 2499, "duration" => "3 months"],
    "starter_local" => ["name" => "Starter Local Plan", "price" => 4999, "duration" => "6 months"],
    "standard" => ["name" => "Standard Plan", "price" => 7999, "duration" => "1 year"],
    // B2C Mid-Range
    "smart_connect" => ["name" => "Smart Connect Plan", "price" => 11999, "duration" => "1 year"],
    "premium_seller" => ["name" => "Premium Seller Plan", "price" => 17999, "duration" => "1 year"],
    "city_growth" => ["name" => "City Growth Plan", "price" => 24999, "duration" => "1 year"],
    // B2C Premium
    "city_leader" => ["name" => "City Leader Package", "price" => 39999, "duration" => "1 year"],
    "elite_business" => ["name" => "Elite Business Plan", "price" => 59999, "duration" => "1 year"],
    "brand_dominator" => ["name" => "Brand Dominator", "price" => 99999, "duration" => "1 year"],
    "ultimate_visibility" => ["name" => "Ultimate Visibility Plan", "price" => 149999, "duration" => "1 year"],
];

// Get selected plan
$planKey = $_GET['plan'] ?? 'basic_listing';
$plan    = $plans[$planKey] ?? $plans['basic_listing'];

// GST calculation (18%)
$gst   = $plan['price'] * 0.18;
$total = $plan['price'] + $gst;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Summary - <?php echo $plan['name']; ?></title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/fontawesome-all.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<!-- Header -->
<header class="bg-black p-4 flex justify-center">
    <a href="index" title="Wishlan - A Smart Web Design Agency">
        <img src="images/wishlanlogo.png" alt="Wishlan Logo" width="150" style="border: none">
    </a>
</header>

<!-- Order Summary Card -->
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Order Summary</h2>
        <p class="text-gray-500 text-center mb-6">Review your plan details before proceeding</p>

        <!-- Plan Details -->
        <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
            <h3 class="text-xl font-semibold text-yellow-600 mb-4 text-center"><?php echo $plan['name']; ?></h3>
            
            <div class="flex justify-between py-2 border-b border-gray-200">
                <span class="text-gray-600">Base Price</span>
                <span class="font-medium">₹<?php echo number_format($plan['price'], 2); ?></span>
            </div>
            <div class="flex justify-between py-2 border-b border-gray-200">
                <span class="text-gray-600">GST (18%)</span>
                <span class="font-medium">₹<?php echo number_format($gst, 2); ?></span>
            </div>
            <div class="flex justify-between py-3 mt-2">
                <span class="text-lg font-semibold text-gray-800">Total</span>
                <span class="text-lg font-bold text-yellow-600">₹<?php echo number_format($total, 2); ?></span>
            </div>
            <div class="flex justify-between py-2 border-t border-gray-200 mt-4">
                <span class="text-gray-600">Duration</span>
                <span class="font-medium"><?php echo $plan['duration']; ?></span>
            </div>
        </div>

        <!-- Proceed to Payment -->
        <button onclick="startPayment()" 
            class="block w-full mt-6 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 rounded-xl text-center transition">
            Proceed to Payment
        </button>

        <!-- Back -->
        <a href="/pricing/" class="block w-full mt-3 text-center text-gray-500 hover:text-gray-700 transition">
            ← Back to Packages
        </a>
    </div>
</div>

<!-- Footer -->
<div class="footer-nine__bottom bg-black text-white p-4">
    <div class="auto-container flex flex-col items-center">
        <p class="mb-2">© 2024 Core Outsourcing Services Private Limited</p>
        <div class="footer-nine__social space-x-4">
            <a href="https://www.facebook.com/profile.php?id=61558829790231" class="fab fa-facebook"></a>
            <a href="https://x.com/wishlan_?t=0xBBZXpmI3XHDvdmcXV6Qw&s=08" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/wishlan_?igsh=azdzbjB6dXQ5aXgx" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/wish-lan/" class="fab fa-linkedin"></a>
        </div>
    </div>
</div>

<!-- Cashfree SDK -->
<script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
<script>
async function startPayment() {
    let amount = <?php echo $total; ?>;
    let response = await fetch("create-order.php?amount=" + amount);
    let data = await response.json();
    const cashfree = Cashfree({ mode: "production" });
    let result = await cashfree.checkout({
        paymentSessionId: data.payment_session_id,
        redirectTarget: "_self"
    });
    console.log(result);
}
</script>

</body>
</html>
