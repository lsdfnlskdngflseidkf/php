<?php
namespace Math\Geometry;
class Circle{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getDiameter()
    {
        return $this->radius * 2;
    }
    public function getArea()
    {
        return M_PI * $this->radius ** 2;
    }
}
?>