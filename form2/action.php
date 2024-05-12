<?php
class Person{
    var $Fname;
    var $Lname;
    var $email;
    var $age;
    function __construct($fname,$lname,$email,$age){
        $this->Fname = $fname;
        $this->Lname = $lname;
        $this->email = $email;
        $this->age = $age;
    
    }
}
if(isset($_POST["Fname"],$_POST["Lname"],$_POST["Lname"],$_POST["email"],$_POST["age"])){
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$email = $_POST["email"];
$age = $_POST["age"];
    // Create an object with user information
    $Person1 = new Person($Fname,$Lname,$email,$age);

    // Echo user information on the page
    echo "<h2>User Information:</h2><br>";
    echo "<p>First Name: $Person1->Fname</p>";
    echo "<p>Last Name: $Person1->Lname</p>";
    echo "<p>Email: $Person1->email</p>";
    echo "<p>Age: $Person1->age</p>";
}
?>