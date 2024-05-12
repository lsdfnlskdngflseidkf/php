<?php
$input="Rs 12,123.123";
$pattern="/[^\d,\.]/";
$output=preg_replace($pattern,"",$input);
echo $output;
?>