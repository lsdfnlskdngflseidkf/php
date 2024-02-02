<?php
// math/geometry/circle.php
namespace geometry;

require "constants.php";
use math\constants as Constants;

class Circle {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getDiameter() {
        return $this->radius * 2;
    }

    public function getArea() {
        return Constants::pi * $this->radius ** 2;
    }
}
?>
