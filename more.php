<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
    $b=20;
    echo  "<br> is equal to ";
    var_dump($a==$b);
    echo  "<br> is identical to ";
    var_dump($a===$b);
    echo  "<br> is not equal to ";
    var_dump($a!=$b);
    echo  "<br> is not equal to ";
    var_dump($a<>$b);
    echo  "<br> is not identical to ";
    var_dump($a!==$b);
    echo  "<br> a is greater than b ";
    var_dump($a>$b);
    echo  "<br> a is smaller than b ";
    var_dump($a<$b);
    echo  "<br> a is greater than  or equal to b ";
    var_dump($a>=$b);
    echo  "<br> a is smaller than  or equal to b ";
    var_dump($a<=$b);
    echo  "<br> Spaceship";
    echo $a<=>$b;

    ?>
</body>
</html>