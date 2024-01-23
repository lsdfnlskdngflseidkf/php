<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="FName"><br>
        <label for="FName">First Name</label><br/>
        <input type="text" name="LName"><br>
        <label for="LName">Last Name</label><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST["FName"]) and isset($_POST["LName"])){
        echo "Your name is ".$_POST["FName"]." ".$_POST["LName"];
        echo "<br>";   
    }
    ?>
</body>
</html>