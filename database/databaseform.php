<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<!-- https://pastebin.com/PvVr6X4r -->
<body>

    <form action="" method="POST">
        <label for="Fname">Full Name:</label>
        <input type="text" name="Fname" ><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" ><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" ><br><br>

        <label for="address"> Address:</label>
        <input type="text" name="address" ><br><br>

        <label for="city"> City:</label>
        <input type="text" name="city" ><br><br>

         <label for="province"> Province:</label>
        <input type="text" name="city" ><br><br>   

         <label for="postal"> Postal Code:</label>
        <input type="text" name="postal" ><br><br>       

        <label for="type"> Traveltype:</label>
        <input type="text" name="type" ><br><br>

        <label for="interestedplaces"> Interested places:</label>
        <input type="checkbox" name="interestedplaces" value="mountains">mountains</input>
        <input type="checkbox" name="interestedplaces" value="beach">beach</input>
        <input type="checkbox" name="interestedplaces" value="city">city</input>

        <label for="transportation">Transportation method :</label>
        <input type="checkbox" name="transportation" value="bus">Bus</input>
        <input type="checkbox" name="transportation" value="plane">Plane</input>
        <input type="checkbox" name="transportation" value="train">train</input>
        <label for="activities"> activities:</label>
        <input type="text" name="activities" ><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php

    if (isset($_POST["Fname"],$_POST['email'],$_POST['phone'],$_POST['address'],$_POST['city'],$_POST['postal'],$_POST['type'],$_POST['interestedplaces'],$_POST['transportation'],$_POST['activities'])){
      $name=$_POST['Fname'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];
      $name=$_POST['Fname'];

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
