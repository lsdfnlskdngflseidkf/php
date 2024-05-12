<?php
$file = fopen("file_name.txt", "r")or die("Unable to open file");
$contents = fread($file,700);
$email_pattern = '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/';
preg_match_all($email_pattern, $contents, $matches);
$emails = $matches[0];
fclose($file);
echo "Email addresses found in the file:\n";
foreach ($emails as $email) {
    echo $email . "\n";
}
?>