<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">First Number</label>
        <input type="text" name="num1"><br><br>
        <label for="num2">Second Number</label>
        <input type="text" name="num2"><br><br>
        <input type="submit" value="Submit">
</form> 

 <?php
//a PHP script that takes two numbers as input, performs arithmetic operations (addition, subtraction, multiplication, division) on them, and displays the results.
if($_SERVER['REQUEST_METHOD']=='POST'){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $sum=$num1+$num2;
    $difference=$num1-$num2;
    $product=$num1*$num2;
    $idk=$num1/$num2;
    echo "The results are:<br> Sum:$sum <br>Difference:$difference<br>Product:$product<br>Quotient:$idk";
    
}
?>   
</body>
</html>