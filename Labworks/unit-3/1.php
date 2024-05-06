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
}
?>