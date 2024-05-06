<?php
class Car
{
    public $make;
    public $model;
    public $year;

    public function __construct($make = "Toyota", $model = "Corolla", $year = 2020)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails()
    {
        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year;
    }
}

$car1 = new Car();
echo $car1->getDetails() . "\n"; 

$car2 = new Car("Honda", "Civic", 2018);
echo $car2->getDetails() . "\n"; 
?>