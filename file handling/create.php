<?php

// Specify the file name and path
$filename = 'example.txt';

// Open the file in write mode ('w' flag)
$file = fopen($filename, 'w');

if ($file) {
    // Write content to the file
    fwrite($file, 'Hello, this is a sample content.');

    // Close the file handle
    fclose($file);

    echo "File '$filename' has been created successfully.";
} else {
    echo "Error creating the file.";
}

?>
