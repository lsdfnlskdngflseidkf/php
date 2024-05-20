<?php
$fileName = 'example.txt';
$initialContent = "This is the initial content.\n";
$file = fopen($fileName, 'w');
if ($file) {
    fwrite($file, $initialContent);
    fclose($file);
    echo "Initial content written to the file successfully.";
} else {
    echo "Failed to create or open the file for writing.";
}
$additionalContent = "This is the additional content.\n";
$file = fopen($fileName, 'a');
if ($file) {
    fwrite($file, $additionalContent);
    fclose($file);
    echo "Additional content appended to the file successfully.";
} else {
    echo "Failed to open the file for appending.";
}
?>