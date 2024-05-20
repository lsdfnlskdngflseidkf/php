<html lang="en">
<body>
<?php
function inverse($number) {
    $reverse = 0;
    do{
        $remainder = $number % 10;
        $number = (int)($number / 10);
        $reverse = ($reverse * 10) + $remainder;
    }while ($number > 0) ;
    return $reverse;
}
function palindromeCheck($number){
    $reverse = 0;
    $temp = $number;
    do{
        $remainder = $temp % 10;
        $temp = (int)($temp / 10);
        $reverse = ($reverse * 10) + $remainder;
    }while($temp > 0);
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
    do{
        $remainder = $number % 10;
        $number = (int)($number / 10);
        $sum += $remainder;
    }while($number > 0);
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