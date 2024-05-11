<?php
$myfile=fopen('test.txt','r');
while(($char=fgetc($myfile))!=false){
    echo "$char";
}
fclose($myfile);
?>