<?php
$myArray = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'cherry' => 'red',
    'date' => 'brown',
    'elderberry' => 'purple'
);
echo "Original Arra is As follows:<br>";
print_r($myArray);
$keys=array_keys($myArray);
shuffle($keys);
foreach ($keys as $key) {
    $shuffledArray[$key] = $myArray[$key];
}
echo "<br><br>The shuffled array is as follows <br>";
print_r($myArray);
?>