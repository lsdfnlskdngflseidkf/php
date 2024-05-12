<?php
class Person
{
    public $name;
    public $age;

    public function speaks()
    {
        echo $this->name . " is speaking<br>";
    }
}
class Student extends Person
{
    public $level;

    public function speaks()
    {
        echo $this->name . " is a student and is speaking<br>";
    }

    public function studies()
    {
        echo $this->name . " is studying in " . $this->level . "<br>";
    }
}
$student = new Student();
$student->name = "Ujwal Parajuli";
$student->age = 20;
$student->level = "Bachelor's";
$student->speaks(); 
$student->studies();