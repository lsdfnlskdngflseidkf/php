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
    function copyStudent($original){
        $this->name=$original->name;
        $this->age=$original->age;
        $this->roll=$original->roll;
        $this->faculty=$original->faculty;
        $this->semester=$original->semester;
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
$st1=new Student("Ronish","19","31","Management","Fourth");
$st2=new Student(" "," "," "," "," ");
$st2->copyStudent($st1);
// $st2->displayAll();
$st1->__destruct();
$st2->displayAll();
$st1->displayAll();
?>  