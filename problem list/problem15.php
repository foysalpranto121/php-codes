<?php
$cart = [
    ["item" => "Laptop", "price" => 1200, "quantity" => 1],
    ["item" => "Mouse", "price" => 25, "quantity" => 2],
    ["item" => "Keyboard", "price" => 75, "quantity" => 1]
];

foreach ($cart as $product) {
    $subtotal = $product['price'] * $product['quantity'];
    echo "Item: {$product['item']}, Price: \${$product['price']}, Quantity: {$product['quantity']}, Subtotal: \${$subtotal}<br>";
}

echo "--------------------";
?>
