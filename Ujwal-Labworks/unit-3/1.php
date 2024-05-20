<?php
class Car
{
    public $make;
    public $model;
    public $year;

    public function __construct($make , $model , $year )
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
public function printobj(){
    echo $this->make;
    echo "<br>".$this->model;
    echo "<br>".$this->year;
}
}
$object=new Car("What's make?","Sorento","2024");
$object->printobj();
?>