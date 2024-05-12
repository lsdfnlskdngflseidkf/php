<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
function capitalizeString($str)
{
    $uppercaseString = strtoupper($str); // Convert the entire string to uppercase
    $result = lcfirst($uppercaseString); // Convert the first character to lowercase

    return $result;
}
$test="This is a test String"; 
$result=capitalizeString($test);
echo $result;
 ?>
</body>
</html>