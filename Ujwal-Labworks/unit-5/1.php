<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testing";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful (Procedural Approach)";
mysqli_close($conn);
?>