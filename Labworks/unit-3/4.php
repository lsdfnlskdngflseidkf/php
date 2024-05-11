<?php
class Student
{
    public $id;
    public $name;
    public $age;
    public $address;
    public $faculty;
    public $semester;

    public function __construct($id, $name, $age, $address, $faculty, $semester)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->faculty = $faculty;
        $this->semester = $semester;
    }
}
public function copycon(Student $obj){
    $this->id = $obj->id;
    $this->name = $obj->name;
    $this->age = $obj->age;
    $this->address = $obj->address;
    $this->faculty = $obj->faculty;
    $this->semester = $obj->semester;
}
?>