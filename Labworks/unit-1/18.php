<?php
function echoUserDefinedFunction() {
    echo "User defined function<br>";
}
function displaySum($num1, $num2) {
    echo "Sum of $num1 and $num2 is: " . ($num1 + $num2) . "<br>";
}
function appendMessage(&$variable, $message) {
    $variable .= $message;
}
function greet($name = "Guest") {
    echo "Hello, $name!<br>";
}
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
function calculateCircleArea($radius) {
    return M_PI * $radius * $radius;
}
function calculateRectangleArea($length, $width) {
    return $length * $width;
}
echoUserDefinedFunction();
displaySum(5, 3);
$message = "Original message. ";
appendMessage($message, "Appended message.");
echo $message . "<br>";
greet("John");
greet(); 
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
