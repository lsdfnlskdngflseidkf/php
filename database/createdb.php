<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creating database and making stuff</title>
</head>
<body>
   <?php
     $servername="Localhost"; 
     $username="root";
     $password="";
     $connection=new Mysqli($servername,$username,$password);
     if($connection->connect_error){
        die("Connection with database has failed".$connection->connect_error);
     }
     else{
        echo "Database connection has succeded";
     }
     $createdb="CREATE DATABASE IF NOT EXISTS WEBTECHTEST";
     if($connection->query($createdb)){
        echo "Database created successfully";
     }
     else{
        echo "Database connection has failed".$connection->connect_error;
     }
     $connection->select_db("WEBTECHTEST");
     $createtable="CREATE TABLE travelbooking(
id INT AUTO_INCREMENT PRIMARY KEY,
fullName VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
address VARCHAR(255) NOT NULL,
city VARCHAR(255) NOT NULL,
province VARCHAR(255) NOT NULL,
postalcode VARCHAR(255) NOT NULL,
country VARCHAR(255) NOT NULL,
travelType ENUM('business','vacation') NOT NULL,
interestedplaces VARCHAR(255) NOT NULL,
transportation ENUM('bus','plane','train') NOT NULL,

activities VARCHAR(255) NOT NULL);";
if($connection->query($createtable)){
    echo "Table created successfully";
}
else{
    die("Table creation has failed".$connection->error);
}
$connection->close();
   ?>
</body>
</html>