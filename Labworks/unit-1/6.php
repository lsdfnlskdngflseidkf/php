<?php
// Implicit conversion from string to integer
$stringNumber = "123";
$sum = $stringNumber + 5;
echo "Implicit Conversion: ";
echo "Result: " . $sum; // Output: Result: 128 (string "123" is converted to integer)
// Implicit conversion from integer to float
$intNumber = 10;
$floatNumber = $intNumber / 2;
echo "<br>Result: " . $floatNumber; // Output: Result: 5 (integer 10 is converted to float)
// Explicit conversion from string to integer
$stringNumber = "456";
$intValue = (int)$stringNumber;
echo "<br><br>Explicit Conversion: ";
echo "Result: " . $intValue; // Output: Result: 456 (string "456" is explicitly converted to integer)
// Explicit conversion from float to integer
$floatNumber = 7.89;
$intValue = (int)$floatNumber;
echo "<br>Result: " . $intValue; // Output: Result: 7 (float 7.89 is explicitly converted to integer)
?>