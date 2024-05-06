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

// Main body
$student1 = new Student(1, "John Doe", 20, "123 Main St", "Computer Science", 3);

echo "Student ID: " . $student1->id . "\n";
echo "Student Name: " . $student1->name . "\n";
echo "Student Age: " . $student1->age . "\n";
echo "Student Address: " . $student1->address . "\n";
echo "Student Faculty: " . $student1->faculty . "\n";
echo "Student Semester: " . $student1->semester . "\n";
?>