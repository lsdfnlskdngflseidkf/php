<?php
class Student
{
    var $name;
    var $age;
    var $roll;
    var $faculty;
    var $semester;
    function __construct(){
    }
    function displayAll(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Roll No: ".$this->roll."<br>";
        echo "Faculty:".$this->faculty."<br>";
        echo "Semester:".$this->semester."<br>";
    }
    function __destruct(){
        $this->name=null;
        $this->age=null;
        $this->roll=null;
        $this->faculty=null;
        $this->semester=null;
    }
}
$st1=new Student();
$st1->name="Ronish";
$st1->age="19";
$st1->roll="31";
$st1->faculty="Management";
$st1->semester="Fourth";
$st1->displayAll();
$st1->__destruct();
$st1->displayAll();
?>  