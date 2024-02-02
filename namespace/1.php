<?php
include_once "math/geometry/constants.php";
include_once "math/geometry/circle.php";
use math\constants;
use geometry\circle as Circle;

$circle = new Circle(10);
echo "Diameter=".$circle->getDiameter(); 
echo " Area=".$circle->getArea();
?>
