<?php
class Student{
    var $name;
    var $age;
    var $roll;
function __construct($name,$age,$roll){
    $this->name=$name;
    $this->age=$age;
    $this->roll=$roll;

}
function displayAll(){
    echo "Name: ".$this->name."<br>";
    echo "Age: ".$this->age."<br>";
    echo "Roll No: ".$this->roll."<br>";
}
}
$st1=new Student("Ronish","19","31");   
$st1->displayAll();
?>