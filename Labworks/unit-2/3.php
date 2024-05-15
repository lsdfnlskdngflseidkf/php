<html lang="en">
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