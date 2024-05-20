<?php
$myfile=fopen('test.txt','r');
while(($line=fgets($myfile))!=false){
    echo "$line <br>";
}
fclose($myfile);
?>