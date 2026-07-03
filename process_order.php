<?php
require "order_functions.php";
$orderSummary = order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 | Order Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Your Bistro Receipt</h1>
<p>The submitted values have been processed by PHP and saved to the session so the form can be repopulated when you return.</p>

<nav>
    <a href="../instructions.html">Assignment Guide</a>
    <a href="index.php">Order Form</a>
    <a href="process_order.php">Latest Receipt</a>
    <a href="about.php">How It Works</a>
</nav>

<h3>Submitted order</h3>
<div class="receipt-card"><?= $orderSummary; ?></div>

<div class="card insight-card">
    <h3>Order feedback</h3>
    <p><?= htmlspecialchars(completionMessage()); ?></p>
    <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
</div>

<div class="card insight-card pricing-grid">
    <div>
        <h3>Estimated total</h3>
        <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
    </div>
    <div>
        <h3>Order profile</h3>
        <p><?= htmlspecialchars(orderProfile()); ?></p>
    </div>
    <p class="insight-note full-width-note"><?= htmlspecialchars(pricingNote()); ?></p>
</div>

<div class="card">
    <h3>What happened behind the scenes</h3>
    <ul>
        <li>The form submitted dessert, drink, and drink size with the POST method.</li>
        <li>PHP stored each value in a session variable.</li>
        <li>Any missing value was replaced with (not selected).</li>
        <li>The helper function returned a display string with HTML line breaks.</li>
        <li>The page adds completion feedback and a pairing suggestion to make the assignment feel more interactive.</li>
    </ul>
    <a href="index.php">Order Again</a> |
    <a href="about.php">Read the Explanation</a> |
    <form action="forget_order.php" method="POST" style="display:inline;">
        <button type="submit">Forget Order</button>
    </form>
</div>

</body>
</html>