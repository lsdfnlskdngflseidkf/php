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
    function display()
    {
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Faculty: " . $this->faculty . "<br>";
        echo "Semester: " . $this->semester . "<br><br>";
    }
   function copystudent(Student $obj){
    $this->id = $obj->id;
    $this->name = $obj->name;
    $this->age = $obj->age;
    $this->address = $obj->address;
    $this->faculty = $obj->faculty;
    $this->semester = $obj->semester;
}
}

$student1 = new Student(1, "Ujwal Parajuli", 19, "Sallaghari", "Management", 4);
echo "Original Object \$student1<br>";
$student1->display();
$student2=new Student(" "," "," "," "," "," ");
$student2->copystudent($student1);
echo "Copied Object \$student2<br>";
$student2->display();
?>