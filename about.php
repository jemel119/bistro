<?php
require "order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 | How It Works</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>How the Bistro Order Flow Works</h1>
<p>This page explains how the front end, PHP processing, and session memory work together across the assignment.</p>

<nav>
    <a href="../instructions.html">Assignment Guide</a>
    <a href="index.php">Order Form</a>
    <a href="process_order.php">Latest Receipt</a>
    <a href="about.php">How It Works</a>
</nav>

<div class="card">
    <h3>Page responsibilities</h3>
    <p><strong>index.php</strong> — Displays the form, restores the user's previous choices from session variables, and keeps the ordering experience clear and organized.</p>
    <p><strong>process_order.php</strong> — Reads the submitted form data, stores it in the session, and presents the formatted order summary back to the user.</p>
    <p><strong>forget_order.php</strong> — Destroys the session so the saved dessert, drink, and drink size are cleared before the next visit.</p>
</div>

<div class="card">
    <h3>PHP session logic</h3>
    <p>The assignment asked for the selected values to be stored in <code>$_SESSION</code>. That means the server remembers the last completed order even after the user leaves the form page and returns through the Order Again link.</p>
    <p>Stored session keys:</p>
    <ul>
        <li><code>$_SESSION['dessert']</code></li>
        <li><code>$_SESSION['drink']</code></li>
        <li><code>$_SESSION['drinkSize']</code></li>
    </ul>
    <p>If a field is not chosen, the code saves <strong>(not selected)</strong>, which matches the assignment prompt and keeps the order summary readable.</p>
</div>

<div class="card">
    <h3>Why the form remembers choices</h3>
    <p>The helper functions compare each option against the session values and return the correct HTML attribute:</p>
    <ul>
        <li><strong>selected</strong> for dessert and drink menu options</li>
        <li><strong>checked</strong> for the drink size radio buttons</li>
    </ul>
    <p>That small PHP output is what repopulates the form when the user comes back to the main page.</p>
</div>

<div class="card">
    <h3>Current saved order</h3>
    <p>
        <?= htmlspecialchars(sessionValue('dessert')); ?>,
        <?= htmlspecialchars(sessionValue('drink')); ?>,
        <?= htmlspecialchars(sessionValue('drinkSize')); ?>
    </p>
    <a href="index.php">Return to Form</a> |
    <form action="forget_order.php" method="POST" style="display:inline;">
        <button type="submit">Clear Saved Order</button>
    </form>
</div>

</body>
</html>