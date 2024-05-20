<?php
$str = "Hello, World!";
$binary = "010101110";
$hexadecimal = bin2hex($binary);
echo "Binary to Hexadecimal: " . $hexadecimal . "<br>";
echo "<br>";
$hexadecimal = "2f";
$binary = hex2bin($hexadecimal);
echo "Hexadecimal to Binary: " . $binary . "<br>";
echo "<br>";
$parts = explode(",", "Hello,World,PHP");
print_r($parts);
echo "<br>";
$list = implode(" - ", $parts);
echo "Imploded String: " . $list . "<br>";
echo "<br>";
$hashed = md5($str);
echo "MD5 Hash: " . $hashed . "<br>";
echo "<br>";
$query = "name=John&age=25";
parse_str($query, $output);
print_r($output);
echo "<br>";
$formatted = printf("The string is: %s", $str);
echo "<br>";
$formatted = sprintf("The string is: %s", $str);
echo "Formatted String: " . $formatted . "<br>";
echo "<br>";
$position = strpos($str, "World");
echo "Position of 'World': " . $position . "<br>";
echo "<br>";
$length = strlen($str);
echo "Length of the string: " . $length . "<br>";
echo "<br>";
$lowercase = strtolower($str);
echo "Lowercase String: " . $lowercase . "<br>";
echo "<br>";
$uppercase = strtoupper($str);
echo "Uppercase String: " . $uppercase . "<br>";
echo "<br>";
$reversed = strrev($str);
echo "Reversed String: " . $reversed . "<br>";
echo "<br>";
$wrapped = wordwrap($str, 5, "<br>", true);
echo "Wrapped String:<br>" . $wrapped . "<br>";
echo "<br>";
$lcFirst = lcfirst($str);
echo "lcfirst() String: " . $lcFirst . "<br>";
echo "<br>";
$ucFirst = ucfirst($str);
echo "ucfirst() String: " . $ucFirst . "<br>";
?>