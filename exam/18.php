<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrival of values from database</title>
</head>
<body>
    <?php
 $servername="www.localhost.com"; 
 $username="BIMStd";
 $password="BIM77";
 $db="BMC";
 $connection=new Mysqli($servername,$username,$password,$db);
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
 $query="Select * from employees";
 $result=$connection->query($query);
?>
<table border="1" >
<tr>
<th>ID</th>
<th>Name </th>
<th>Address</th>
</tr>
<?php
while($row=$result->fetch_assoc()){
echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['Name']}</td>
    <td>{$row['address']}</td>
    </tr>";
}
?>
</table>
</body>
</html>