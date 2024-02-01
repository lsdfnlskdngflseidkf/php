<?php
namespace math\geometry;
class circle {
    public $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function getDiameter(){
        return $this->radius*2;
    }
}
public function getarea(){
    return ../constants::pi*$this->radius**2;
    // return math\constants::pi*$this->radius**2;
}



?>      