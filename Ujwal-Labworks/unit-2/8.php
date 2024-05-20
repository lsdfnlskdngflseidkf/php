<?php
$products = array(
    "Book" => array(
        "price" => 1200,
        "quantity" => 3
    ),
    "Pen" => array(
        "price" => 150,
        "quantity" => 10
    ),
    "Notebook" => array(
        "price" => 575,
        "quantity" => 2
    )
);

$totalPrice = 0;

foreach ($products as $product => $details) {
    $productPrice = $details["price"] * $details["quantity"];
    $totalPrice += $productPrice;
    echo "Product: $product, Total Price: Rs" . number_format($productPrice, 2) . "\n";
}

echo "\nTotal Price: Rs $totalPrice";


?>