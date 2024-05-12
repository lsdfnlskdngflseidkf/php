<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 if(isset($_POST['Name'])){
    $name=$_POST['Name'];
    echo "Hello ".$name;
 }
 else{
 ?>
<form action="" method="post">
<label for="Name">Name:</label>
<input type="text" name="Name">
</form>
<?php
 }
 ?>
</body>
</html>