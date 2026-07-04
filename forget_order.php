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

<h1>Saved Order Cleared</h1>
<p>The PHP session has been destroyed, so the form will open with a fresh state the next time you visit it.</p>

<nav>
    <a href="../instructions.html">Assignment Guide</a>
    <a href="index.php">Order Form</a>
    <a href="process_order.php">Latest Receipt</a>
    <a href="about.php">How It Works</a>
</nav>

<div class="card insight-card">
    <h3>Session reset complete</h3>
    <p>Your previous bistro order has been forgotten. Returning to the form will now show the default options instead of the last saved choices.</p>
    <a class="btn" href="index.php">Start a New Order</a>
    <a class="btn btn-secondary" href="about.php">Review the PHP Flow</a>
</div>

</body>
</html>