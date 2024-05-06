<?php
$input = "Hello, world! This is a sample 123 string. It has multiple words and numbers.";
$email= "username@domain.com"
$pattern = "/world/";
$emailpattern="/\d/"
if (preg_match($pattern, $input)) {
    echo "preg_match() found a match: 'world'\n";
} else {
    echo "preg_match() did not find a match.\n";
}

$pattern = "/\d+/";
preg_match_all($pattern, $input, $matches);
echo "preg_match_all() found numbers: " . implode(", ", $matches[0]) . "\n";

$pattern = "/world/";
$replacement = "PHP";
$output = preg_replace($pattern, $replacement, $input);
echo "preg_replace() replaced 'world' with 'PHP': $output\n";

$pattern = "/\s+/";
$parts = preg_split($pattern, $input);
echo "preg_split() split the string on whitespace: " . implode(", ", $parts) . "\n";

$array = array("apple", "banana", "orange", "grape");
$pattern = "/a/";
$filtered = preg_grep($pattern, $array);
echo "preg_grep() filtered the array for elements containing 'a': " . implode(", ", $filtered) . "\n";

$pattern = "/^" . preg_quote($input) . "$/";
if (preg_match($pattern, $input)) {
    echo "preg_quote() and preg_match() found an exact match for the input string.\n";
} else {
    echo "preg_quote() and preg_match() did not find an exact match for the input string.\n";
}

?>