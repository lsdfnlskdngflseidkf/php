<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $filename = 'example.csv';

$file = fopen($filename, 'r');

if ($file) {

    fclose($file);

    echo "File '$filename' has been created successfully.";
} else {
    echo "Error creating the file.";
}
    ?>
</body>
</html>