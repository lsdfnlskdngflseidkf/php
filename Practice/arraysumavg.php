<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$arr=array(1,2,3,4,5,6,7,8,9,10) ;
$sum=0;
foreach($arr as $value){
    $sum+=$value;
} 
$avg=$sum/count($arr);
echo "Sum of Numbers:$sum<br>Average of the numbers:$avg"

 ?>
</body>
</html>