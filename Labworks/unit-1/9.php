<?php
// Predefined three numbers
$num1 = 10;
$num2 = 20;
$num3 = 15;

// Check which number is greater
if ($num1 > $num2) {
    if ($num1 > $num3) {
        echo "The greatest number is: $num1\n";
    } else {
        echo "The greatest number is: $num3\n";
    }
} elseif ($num2 > $num3) {
    echo "The greatest number is: $num2\n";
} else {
    echo "The greatest number is: $num3\n";
}
?>
