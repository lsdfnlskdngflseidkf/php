<?php
include_once "math/grometry/constants.php";
include_once "math/geometry/circle.php";
use math\geometry\constants;
use math\geometry\circle as Circle;
$circle =new Circle(10);
echo "Diameter=".$circle->getDiameter(); 
echo "area=".$circle->getarea(); 
?>