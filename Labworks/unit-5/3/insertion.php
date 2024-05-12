<!DOCTYPE html>
<html lang="en">
<!-- https://pastebin.com/Gt1Puj5P  -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    
    </style>
</head>

<body>

    <form action="" method="POST">
        <label for="Fname">Full Name:</label>
        <input type="text" name="Fname"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email"><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone"><br><br>

        <label for="address"> Address:</label>
        <input type="text" name="address"><br><br>

        <label for="city"> City:</label>
        <input type="text" name="city"><br><br>

        <label for="province"> Province:</label>
        <input type="text" name="province"><br><br>

        <label for="postal"> Postal Code:</label>
        <input type="number" name="postal"><br><br>

        <label for="country"> Country:</label>
        <input type="text" name="country"><br><br>

        <label for="type"> Travel type:</label>
        <input type="radio" name="type" value="business"> Business</input>
        <input type="radio" name="type" value="vacation">Vacation</input><br><br>

        <label for="interestedplaces"> Interested places:</label>
        <input type="radio" name="interestedplaces" value="mountains"> Mountains</input>
        <input type="radio" name="interestedplaces" value="beach"> Beach</input>
        <input type="radio" name="interestedplaces" value="city"> City</input><br><br>

        <label for="transportation">Transportation method:</label>
        <input type="radio" name="transportation" value="bus"> Bus</input>
        <input type="radio" name="transportation" value="plane"> Plane</input>
        <input type="radio" name="transportation" value="train"> Train</input><br><br>

        <label for="activities"> Activities:</label>
        <input type="text" name="activities"><br><br>
        <input type="submit" value="Submit">
    </form>
        <?php
   $servername="Localhost"; 
   $username="root";
   $password="";
   $database="WEBTECHTEST";
   $connection=new Mysqli($servername,$username,$password,$database);
   if($connection->connect_error){
    die("Connection to the database has failed".$connection->connect_error);
   }
else{
  echo "<p> Connection Successful</p>";
}
         if (isset($_POST["Fname"], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['city'],
            $_POST['postal'], $_POST['type'], $_POST['interestedplaces'], $_POST['transportation'],
            $_POST['activities']))
             { 
             $name=$_POST['Fname'];
             $email=$_POST['email']; 
             $phone=$_POST['phone'];
             $address=$_POST['address']; 
             $city=$_POST['city']; 
             $province=$_POST['province']; 
             $postal=$_POST['postal'];
             $country=$_POST['country']; 
             $type=$_POST['type']; 
             $interestedplaces=$_POST['interestedplaces'];
             $transportation=$_POST['transportation']; 
             $activities=$_POST['activities'];
             $query="INSERT INTO travelbooking (fullName, email, phone, address, city, province, postalcode, country, travelType, interestedplaces, transportation, activities) VALUES ('$name', '$email', '$phone', '$address', '$city', '$province', '$postal', '$country', '$type', '$interestedplaces', '$transportation', '$activities')"
            ; if($connection->query($query)==true){
            echo "<p><br>New record inserted successfully</p>";
            }
            else{
            die("Error".$connection->error);
            }
            }
            ?>
</body>

</html>