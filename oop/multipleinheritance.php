<!DOCTYPE html>
<head>
    <title>This is a page</title>
</head>
<body>
    <?php
    interface Interface1{
        function add(); 
    }
interface Interface2{
    function sub();
}
class ParentClass{
    function multiply($num1,$num2){
  echo "Product=".$num0*$num1."<br>";
    }
}
class ChildClass extends Parentclass implements Interface1,Interface2
{
        function __construct(){
            echo "Hahah ";
        }
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
$test->multiply(10,5);
?>
</body>
</html>