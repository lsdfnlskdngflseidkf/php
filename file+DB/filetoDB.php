<!DOCTYPE html>
<html lang="en">
<head>
    <title>reading from a csv and writing into the DB</title>
</head>
<body>
   <?php
include_once "connecting.php";
include_once "fileopeningread.php";

while($data=fgetcsv($file,'1000',",")){
    $id =  $data[0];
    $name =  $data[1];
    $price =  $data[2];
    $quan =$data[3];
    $insertquery="insert into product(id,name,price,quantity) values($id,'$name',$price,$quan);";

    if($connection->query($insertquery)){
        echo "data was inserted in to the database<br>";
    }
    else{
        echo "error in inserting the data".$connection->error; 
    }
}
$connection->close();
// fgetcsv/ $file,'1000',","
?> 
</body>
</html>