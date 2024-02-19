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
 $query="Select * from travelbooking where is_deleted=false";
 $result=$connection->query($query);
?>
<table border="1" >
<tr>
<th>ID</th>
<th>Full Name </th>
<th>Email</th>
<th>phone</th>
<th>Address</th>
<th>city</th>
<th>province</th>
<th>postalcode</th>
<th>Country</th>
<th>Traveltype</th>
<th>Interested places</th>
<th>Transportation</th>
<th>activities</th>
</tr>
<?php
while($row=$result->fetch_assoc()){
echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullName']}</td>
    <td>{$row['email']}</td>
    <td>{$row['phone']}</td>
    <td>{$row['address']}</td>
    <td>{$row['city']}</td>
    <td>{$row['province']}</td>
    <td>{$row['postalcode']}</td>
    <td>{$row['country']}</td>
    <td>{$row['travelType']}</td>
    <td>{$row['interestedplaces']}</td>
    <td>{$row['transportation']}</td>
    <td>{$row['activities']}</td>
    </tr>";
}
?>
</table>
</body>
</html>