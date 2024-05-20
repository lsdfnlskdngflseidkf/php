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
$student1 = new Student(1, "Ujwal Parajuli", 19, "SallaGhari", "Management", 4);
echo "Student ID: " . $student1->id . "<br>";
echo "Student Name: " . $student1->name . "<br>";
echo "Student Age: " . $student1->age . "<br>";
echo "Student Address: " . $student1->address . "<br>";
echo "Student Faculty: " . $student1->faculty . "<br>";
echo "Student Semester: " . $student1->semester . "<br>";
?>