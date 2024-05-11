<?php

require_once 'Math/Geometry/circle.php';
require_once 'Math/Constants/constants.php';

use Math\Geometry\Circle;

$circle = new Circle(5);
echo "Diameter: " . $circle->getDiameter() . "\n";
echo "Area: " . $circle->getArea() . "\n";
?>