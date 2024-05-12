<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
  echo "Connection Successful<br>";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['Name'];
  $query="insert into Names(name) values('$name')";
 if($connection->query($query)){
  echo "<br> The data was successfully inserted into the database";
 } 
 else{
  echo "Some Error Occured".$connection->error;
 }
}
  ?>
  <br> <br><br>
  <h2> Retrival section</h2>
zR
</body>
</html>