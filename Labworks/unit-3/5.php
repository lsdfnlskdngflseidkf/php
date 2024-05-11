<?php
class Person{
    public $name;
    public $age;
    public function speaks(){
        echo $this->name." is speaking<br>";
    }
}
class Student extends Person{
    public $level;
    public function studies(){
        echo $this->name." is studying in ".$this->level."<br>";
    }
}
class Teacher extends Person{
    public $position;
    public function teaches(){
        echo $this->name." is teaching";
    }
}
$student=new Student();
$student->name="Ujwal Parajuli";
$student->age=20;
$student->level="Bachelor's";
$student->speaks();
$student->studies();
$teacher=new Teacher();
$teacher->name="Madan Bhandari";
$teacher->age=29;
$teacher->position="Lecturer";
$teacher->speaks();
$teacher->teaches();
?>