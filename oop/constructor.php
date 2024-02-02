<?php
class Student
{
    var $name;
    var $age;
    var $roll;
    var $faculty;
    var $semester;
    function __construct($name,$age,$roll,$faculty,$semester){
        $this->name=$name;
        $this->age=$age;
        $this->roll=$roll;
        $this->faculty=$faculty;
        $this->semester=$semester;
    }
    function displayAll(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Roll No: ".$this->roll."<br>";
        echo "Faculty".$this->faculty."<br>";
        echo "Semester".$this->semester."<br>";
    }
}
$st1=new Student("Ronish","19","31","Management","Fourth");
$st1->displayAll();
?>  