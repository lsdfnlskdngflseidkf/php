<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form>
    <legend>Travel Booking Form</legend>
  <label for=name>Name:</label>
  <input type=text name=name><br>
  <label for=contact>Contact:</label>
  <input type=number name=contact><br>
  <label for=email>Email:</label>
  <input type=email name=email><br>
  <label for=Address>Address:</label>
  <input type=text name=Address><br>
<label for="Destination">Select your Destination:</label>
    <select  name="Destination">  
      <option value="pokhara">Pokhara</option>
      <option value="mustang">Mustang</option>
      <option value="jiri">Jiri</option>
      <option value="pathibhara">Pathibhara</option>
      <option value="ilam">Ilam</option>
      <option value="ghandruk">Ghandruk</option>
      <option value="bandipur">Bandipur</option>
    </select><br>
    <label for="Packagetype">Select your package</label>
    <select name="Packagetype">
      <option value="Basic">Basic</option>
      <option value="Basic">Super</option>
      <option value="Basic">Deluxe</option>
    </select>
    <input type=submit value=submit>
  </form> 
  <?php
class Traveller{
  var $name;
  var $contact;
  var $email;
  var $address;
  var $destintaion;
  var $package;
  function __construct($name,$contact,$email,$address,$destination,$package){
    $this->name=$name;
    $this->contact=$contact;
    $this->email=$email;
    $this->address=$address;
    $this->destination=$destination;
    $this->package=$package;
  }
  function displayAll(){
   echo "Name:". $this->name."<br>";
   echo "Contact No:".$this->contact."<br>";
   echo  "Email Address:".$this->email."<br>";
   echo "Traveller Address:".$this->address."<br>";
   echo "Destination:".$this->destination."<br>";
   echo  "Package:".$this->package."<br>";
  }

}
if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$_POST['name'];
  $con=$_POST['contact'];
  $mail=$_POST['Email'];
  $add=$_POST['address'];
  $dest=$_POST['destination'];
  $pack=$_POST['package'];
$object=new Traveller($name,$con,$mail,$add,$dest,$pack);
}


?>
<style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            /* Background color for the entire page */
        }

        .aside {
            margin-left: 20px;
        }

        form {
            background-color: #ffffff;
            /* Background color for the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            /* Green submit button color */
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            /* Darker green color on hover */
        }
    </style>
</body>
</html>