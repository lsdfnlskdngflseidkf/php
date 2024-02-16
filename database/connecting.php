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
   $database="webtech";
   $connection=new Mysqli($servername,$username,$password,$database);
   if($connection->connect_error){
    die("Connection to the database has failed".$connection->connect_error);
   }
else{
  echo "Connection Successful";
}
  ?>
</body>
</html>