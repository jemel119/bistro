<?php
session_start();
$_SESSION = [];
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 | Saved Order Cleared</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="hero">
    <div class="hero-text">
        <p class="eyebrow">Homework 03</p>
        <h1>Saved Order Cleared</h1>
        <p class="lead">The PHP session has been destroyed, so the form will open with a fresh state the next time you visit it.</p>
    </div>
    <nav>
        <a href="index.php">Order Form</a>
        <a href="process_order.php">Latest Receipt</a>
        <a href="about.php">How It Works</a>
    </nav>
</header>

<div class="card insight-card">
    <h3>Session reset complete</h3>
    <p>Your previous bistro order has been forgotten. Returning to the form will now show the default options instead of the last saved choices.</p>
    <div class="action-row">
        <a class="btn" href="index.php">Start a New Order</a>
        <a class="btn btn-secondary" href="about.php">Review the PHP Flow</a>
    </div>
</div>

</body>
</html>