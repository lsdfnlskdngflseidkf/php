<?php

// a. Function to check if a number is palindrome or not
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

// b. Function to check if a number is an Armstrong number or not
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

// c. Function to reverse a number
function reverseNumber($number) {
    $reverse = 0;

    while ($number != 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }

    return $reverse;
}

// d. Function to check if a number is positive, negative, or zero
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

// e. Function to calculate the sum of individual digits of a number
function sumOfDigits($number) {
    $sum = 0;

    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }

    return $sum;
}

// f. Function to calculate the roots of a quadratic equation (ax^2 + bx + c = 0)
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
    }
}

// g. Function to check if a given year is a leap year or not
function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}

// Testing the functions
$number = 12321;
echo "Is $number a palindrome? " . (isPalindrome($number) ? "Yes" : "No") . "\n";

$number = 153;
echo "Is $number an Armstrong number? " . (isArmstrong($number) ? "Yes" : "No") . "\n";

$number = 12345;
echo "Reverse of $number is " . reverseNumber($number) . "\n";

$number = -10;
echo "$number is " . checkNumber($number) . "\n";

$number = 123;
echo "Sum of digits of $number is " . sumOfDigits($number) . "\n";

$a = 1;
$b = -3;
$c = 2;
echo "Roots of the quadratic equation $a*x^2 + $b*x + $c = 0 are: " . implode(", ", quadraticRoots($a, $b, $c)) . "\n";

$year = 2024;
echo "$year is " . (isLeapYear($year) ? "a leap year" : "not a leap year") . "\n";

?>
