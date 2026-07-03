<?php
require "order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 | Bistro Order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Bistro Order Studio</h1>

<div class="card insight-card">
    <h3>Live guidance</h3>
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
</div>

<form class="card" action="process_order.php" method="POST">
    <label for="dessert">Dessert</label>
    <select id="dessert" name="dessert">
        <option value="none">Select one...</option>
        <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
        <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
        <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
        <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
    </select>

    <label for="drink">Drink</label>
    <select id="drink" name="drink">
        <option value="none">Select one...</option>
        <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
        <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
        <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
        <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
        <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
    </select>

    <label>Drink size</label>
    <div class="radio-row">
        <label><input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>> Small</label>
        <label><input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected("Medium"); ?>> Medium</label>
        <label><input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected("Large"); ?>> Large</label>
    </div>

    <button type="submit">Submit Order</button>
</form>

<form action="forget_order.php" method="POST">
    <button type="submit">Forget Saved Order</button>
</form>

<div class="card">
    <p><strong>Saved session snapshot</strong></p>
    <p>Dessert: <?= htmlspecialchars(sessionValue('dessert')); ?></p>
    <p>Drink: <?= htmlspecialchars(sessionValue('drink')); ?></p>
    <p>Size: <?= htmlspecialchars(sessionValue('drinkSize')); ?></p>
</div>

</body>
</html>