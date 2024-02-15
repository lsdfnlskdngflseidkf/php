<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pattern Display</title>
</head>
<body>

<h2>Pattern Display</h2>

<?php
// Displaying pattern 1
echo "<h3>Pattern 1:</h3>";
for ($i = 7; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
echo "<h3>Pattern 2:</h3>";
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
// Displaying pattern 2
echo "<h3>Pattern 3:</h3>";
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

</body>
</html>
