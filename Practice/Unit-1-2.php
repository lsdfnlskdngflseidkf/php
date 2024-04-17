<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['year'])){
$year=$_GET['year'];
if($year%4==0){
    if($year%100==0){
        if($year%400==0){
            echo "Leap Year";
        }
        else{
            echo "Not Leap Year";
        }
    }
    else{
        echo "Leap Year";
    }
}
else{
        echo "Not Leap Year";
    }
}
else{
    ?>
 <form action="">
    Enter the Year:<input type="text" name="year">
    <input type="submit" value="Submit">
</form>
<?php
}

?>
</body>
</html>