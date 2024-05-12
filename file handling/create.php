<?php
$filename = 'example.txt';
$file = fopen($filename, 'w');
if ($file) {
    fwrite($file, 'Hello, this is a sample content.');

    fclose($file);

    echo "File '$filename' has been created successfully.";
} else {
    echo "Error creating the file.";
}

?>
