<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "WEBTECHTEST";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection with database has failed: " . $connection->connect_error);
} else {
    echo "Database connection has succeeded<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $columnToUpdate = $_POST['column'];
    $newValue = $_POST['new_value'];

    $updateQuery = "UPDATE travelbooking SET $columnToUpdate = '$newValue' WHERE id = '$id'";
    if($connection->query($updateQuery)){
        echo "The record was updated successfully";
    } 
    else{
        echo "Error".$connection->error;
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database updating under CRUD operations</title>
</head>
<body>
    <h2>Update Data</h2>
    <form method="post" action="">
        <label for="id">Record ID:</label>
        <input type="text" name="id" id="id" required><br><br>
        <label for="column">Select Column to Update:</label>
        <select name="column" id="column">
            <option value="fullName">Full Name</option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
            <option value="address">Address</option>
            <option value="city">city</option>
            <option value="province">province</option>
            <option value="postalcode">Postal code</option>
            <option value="country">Country</option>
            <option value="travelType">Travel type</option>
            <option value="interestedplaces">Interested places</option>
            <option value="transportation">Transportation</option>
            <option value="activities">activities</option>
        </select><br><br>
        <label for="new_value">New Value:</label>
        <input type="text" name="new_value" id="new_value" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
