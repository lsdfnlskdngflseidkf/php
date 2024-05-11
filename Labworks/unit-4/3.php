<?php
$myfile=fopen('test2.txt','w');
$content="This is the content to write into a file";
fwrite($myfile,$content);
?>