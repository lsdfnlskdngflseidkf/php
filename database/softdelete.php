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
    $alterquery="ALTER TABLE travelbooking
ADD is_deleted boolean default false; ";
// $connection->query($alterquery);

    $updateQuery = "UPDATE travelbooking SET  is_deleted= 1 WHERE id = '$id'";
    if($connection->query($updateQuery)){
        echo "The record was Deleted successfully";
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
    <title>Soft delete a row</title>
</head>
<body>
    <h2>Delete record</h2>
    <form method="post" action="">
        <label for="id">Record ID:</label>
        <input type="text" name="id" id="id" required><br><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>
