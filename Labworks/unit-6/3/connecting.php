<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
     $createdb="CREATE DATABASE IF NOT EXISTS accounts";
     if($connection->query($createdb)){
        echo "Database created successfully";
     }
     else{
        echo "Database connection has failed".$connection->connect_error;
     }
     $connection->select_db("accounts");
$createquery="create table if not exists accounts(
    email varchar(64) unique not NULL,
    password varchar(64) not null,
   username varchar(64) not null);";
  if($connection->query($createquery)){
   echo "<br> table created successfully";
  }else{
   echo "error creating Table ";
  }

  ?>
</body>
</html>