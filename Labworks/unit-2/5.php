<?php
// Define a string
$str = "Hello, World!";

// 1. bin2hex()
$binary = "010101110";
$hexadecimal = bin2hex($binary);
echo "Binary to Hexadecimal: " . $hexadecimal . "\n"; // Output: Binary to Hexadecimal: 2f
echo "<br>";
// 2. hex2bin()
$hexadecimal = "2f";
$binary = hex2bin($hexadecimal);
echo "Hexadecimal to Binary: " . $binary . "\n"; // Output: Hexadecimal to Binary: 010101110
echo "<br>";
// 3. explode()
$parts = explode(",", "Hello,World,PHP");
print_r($parts); // Output: Array ( [0] => Hello [1] => World [2] => PHP )

echo "<br>";

// 4. implode()
$list = implode(" - ", $parts);
echo "Imploded String: " . $list . "\n"; // Output: Imploded String: Hello - World - PHP

echo "<br>";
// 5. md5()
$hashed = md5($str);
echo "MD5 Hash: " . $hashed . "\n"; // Output: MD5 Hash: ed076287532e86365e841e92bfc50d8c

echo "<br>";
// 6. parse_str()
$query = "name=John&age=25";
parse_str($query, $output);
print_r($output); // Output: Array ( [name] => John [age] => 25 )

echo "<br>";
// 7. printf()
$formatted = printf("The string is: %s", $str);
// Output: The string is: Hello, World!

echo "<br>";
// 8. sprintf()
$formatted = sprintf("The string is: %s", $str);
echo "Formatted String: " . $formatted . "\n"; // Output: Formatted String: The string is: Hello, World!

echo "<br>";
// 9. strpos()
$position = strpos($str, "World");
echo "Position of 'World': " . $position . "\n"; // Output: Position of 'World': 7

echo "<br>";
// 10. strlen()
$length = strlen($str);
echo "Length of the string: " . $length . "\n"; // Output: Length of the string: 13

echo "<br>";
// 11. strtolower()
$lowercase = strtolower($str);
echo "Lowercase String: " . $lowercase . "\n"; // Output: Lowercase String: hello, world!

echo "<br>";
// 12. strtoupper()
$uppercase = strtoupper($str);
echo "Uppercase String: " . $uppercase . "\n"; // Output: Uppercase String: HELLO, WORLD!

echo "<br>";
// 13. strrev()
$reversed = strrev($str);
echo "Reversed String: " . $reversed . "\n"; // Output: Reversed String: !dlroW ,olleH

echo "<br>";
// 14. wordwrap()
$wrapped = wordwrap($str, 5, "\n", true);
echo "Wrapped String:\n" . $wrapped . "\n"; // Output: Wrapped String: Hello
                                             //         ,
echo "<br>";
                                             //         World!

// 15. lcfirst()
$lcFirst = lcfirst($str);
echo "lcfirst() String: " . $lcFirst . "\n"; // Output: lcfirst() String: hello, World!

echo "<br>";
// 16. ucfirst()
$ucFirst = ucfirst($str);
echo "ucfirst() String: " . $ucFirst . "\n"; // Output: ucfirst() String: Hello, World!
?>