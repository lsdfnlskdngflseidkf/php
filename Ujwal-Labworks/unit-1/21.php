<?php
function isPalindrome($number) {
    $originalNumber = $number;
    $reverseNumber = 0;
    while ($number != 0) {
        $remainder = $number % 10;
        $reverseNumber = $reverseNumber * 10 + $remainder;
        $number = (int)($number / 10);
    }
    return $originalNumber == $reverseNumber;
}
function isArmstrong($number) {
    $originalNumber = $number;
    $sum = 0;

    while ($number != 0) {
        $digit = $number % 10;
        $sum += $digit ** 3;
        $number = (int)($number / 10);
    }
    return $originalNumber == $sum;
}
function reverseNumber($number) {
    $reverse = 0;
    while ($number != 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }
    return $reverse;
}
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }}
function sumOfDigits($number) {
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}
function quadraticRoots($a, $b, $c) {
    $delta = $b * $b - 4 * $a * $c;
    if ($delta > 0) {
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        return array($root1, $root2);
    } elseif ($delta == 0) {
        $root = -$b / (2 * $a);
        return array($root);
    } else {
        return "No real roots";
    }}
function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}
$number = 12321;
echo "Is $number a palindrome? <br>" . (isPalindrome($number) ? "Yes" : "No") . "<br>";
$number = 153;
echo "Is $number an Armstrong number? <br>" . (isArmstrong($number) ? "Yes" : "No") . "<br>";
$number = 12345;
echo "Reverse of $number is " . reverseNumber($number) . "<br>";
$number = -10;
echo "$number is " . checkNumber($number) . "<br>";
$number = 123;
echo "Sum of digits of $number is " . sumOfDigits($number) . "<br>";
$a = 1;
$b = -3;
$c = 2;
echo "Roots of the quadratic equation $a*x^2 + $b*x + $c = 0 are: " . implode(", ", quadraticRoots($a, $b, $c)) . "<br>";
$year = 2024;
echo "$year is " . (isLeapYear($year) ? "a leap year" : "not a leap year") . "<br>";
?>