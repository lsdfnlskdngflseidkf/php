<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    interface interface1{
        function add($num0,$num1){}
    }
interface interface2{
    function sub($minuend,$subtrahend){
    }

}
class ParentClass{
    function multiply($num1,$num2){
  echo "Product=".$num0*$num1."<br>";
      
    }
}
class Childclass extends Parentclass implements interface1,interface2{
        function add($num0,$num1){
 echo "sum=".$num0+$num1."<br>";
        }
    function sub($minuend,$subtrahend){
  echo "difference=".$num0-$num1."<br>";
      
    }
}
$test=new ChildClass();
$test->add(1,2);
$test->sub(10,5);
$test->add(10,5);
?>
</body>
</html>