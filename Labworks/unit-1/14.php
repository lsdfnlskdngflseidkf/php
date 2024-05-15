<html lang="en">
<body>
<?php
function inverse($number) {
    $reverse = 0;
    while ($number > 0) {
        $remainder = $number % 10;
        $number = (int)($number / 10);
        $reverse = ($reverse * 10) + $remainder;
    }
    return $reverse;
}
function palindromeCheck($number){
    $reverse = 0;
    $temp = $number;
    while($temp > 0){
        $remainder = $temp % 10;
        $temp = (int)($temp / 10);
        $reverse = ($reverse * 10) + $remainder;
    }
    if($number == $reverse){
        echo "The number is a palindrome<br>";
    }
    elseif($number % 10 == 0 && $number != 0){
        echo "The result could not be determined because the number is a multiple of 10<br>";
    }
    else{
        echo "The number is not a palindrome<br>";
    }
}
function sumDigits($number){
    $sum = 0;
    while($number > 0){
        $remainder = $number % 10;
        $number = (int)($number / 10);
        $sum += $remainder;
    }
    return $sum;
}
$originalnum = 12345;
echo inverse($originalnum);
echo "<br>";
$anothernum = 323;
palindromeCheck($anothernum);
echo sumDigits($originalnum);
?>
</body>
</html>