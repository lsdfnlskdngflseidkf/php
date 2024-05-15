<?php
class Car
{
    public $make;
    public $model;
    public $year;
    public function __construct($make = "idk what make means", $model = "Corolla", $year = 2020)
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
echo $car1->getDetails() . "<br>"; 
$car2 = new Car("idk what make means", "Civic", 2018);
echo $car2->getDetails() . "<br>"; 
?>