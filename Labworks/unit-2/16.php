<?php
$numbers = [5, 2, 8, 1, 9];
print_r($numbers);
sort($numbers);
echo "<br>Sorted using sort() function: ";
print_r($numbers);
echo "<br>The 3rd highest number is: " . $numbers[count($numbers) - 3] . "<br>";
$numbers = [32, 7, 18, 54, 11, 29, 3, 41, 63, 26];
print_r($numbers);
asort($numbers);
echo "<br>Sorted using asort() function: ";
print_r($numbers);
$sortedValues = array_values($numbers);
echo "<br>The 3rd highest number is: " . $sortedValues[count($sortedValues) - 3] . "<br>";
?>