<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $year=2020;
    if ($year % 4 == 0 && $year % 100 != 0) {
        echo "The year is a leap year";
    } else if ($year % 400 != 0) {
        echo "The year is not a leap year";
    } else {
        echo "The year is a leap year";
    }
    ?>
</body>
</html> 