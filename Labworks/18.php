<?php

// a. Function to echo "user defined function"
function echoUserDefinedFunction() {
    echo "User defined function<br>";
}

// b. Function to display the sum of two numbers
function displaySum($num1, $num2) {
    echo "Sum of $num1 and $num2 is: " . ($num1 + $num2) . "<br>";
}

// c. Function to append a message to a referenced variable
function appendMessage(&$variable, $message) {
    $variable .= $message;
}

// d. Function with default argument
function greet($name = "Guest") {
    echo "Hello, $name!<br>";
}

// e. Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// f. Function to calculate the area of a circle
function calculateCircleArea($radius) {
    return M_PI * $radius * $radius;
}

// Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

// Testing the functions
echoUserDefinedFunction();
displaySum(5, 3);

$message = "Original message. ";
appendMessage($message, "Appended message.");
echo $message . "<br>";

greet("John");
greet(); // Calling with default argument

$number = 17;
if (isPrime($number)) {
    echo "$number is prime.<br>";
} else {
    echo "$number is not prime.<br>";
}

$radius = 3;
echo "Area of circle with radius $radius is: " . calculateCircleArea($radius) . "<br>";

$length = 4;
$width = 6;
echo "Area of rectangle with length $length and width $width is: " . calculateRectangleArea($length, $width) . "<br>";

?>
