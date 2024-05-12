<?php
require "class1.php";
require "class2.php";

use testing\test as Testing;
use another\test as Test;
 
$obj1=new Testing();
$obj2=new Test();
echo $obj1->sum(1,2);
echo "<br>";
echo $obj2->difference(1,2);
echo "<br>";
echo "Testing";
?>