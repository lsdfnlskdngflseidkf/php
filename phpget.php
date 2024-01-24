<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="num1"><br>
        <label for="num1">First Number</label><br/>
        <input type="text" name="num2"><br>
        <label for="num2">Second Number</label><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if(isset($_GET["num1"]) and isset($_GET["num2"])){
        $firstnum=$_GET['num1'];
        $secondnum=$_GET['num2'];
        echo "<br><br>".$firstnum+$secondnum." is the sum of those two Numbers";
    }
    ?>
</body>
</html>