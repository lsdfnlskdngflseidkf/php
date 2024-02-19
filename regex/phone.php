<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$number = "9749844275";
$patntc = "/^97(0-9){8}$/";
$patnt = "/^984(0-9){7}$/";
$patnc = "/^98(0-1){1}(0-9){7}$/";

if (preg_match($patntc, $number) || preg_match($patnt, $number)) {
    echo "Your phone number is NTC";
} elseif (preg_match($patnc, $number)) {
    echo "Your Number is Ncell";
}
?>
</body>
</html>
