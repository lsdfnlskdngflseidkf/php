<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string="Visit london city college";
        $pattern="/london/i";
        echo preg_replace($pattern,"BMC",$string);
    ?>
</body>
</html>