<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $a=0;
    $b=30;
    $c=0;
    var_dump($a==$c&&$b==$c);
    echo "<br>";
    var_dump(($a!=$b)&&($a<$b));
    echo "<br>";
    var_dump(($a!=$b)and($a<$b));
    ?>  
</body>
</html>