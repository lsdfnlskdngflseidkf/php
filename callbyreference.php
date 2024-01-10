<?php
$a=5;
$b=6;
function changeValue(&$a,&$b){
    $a=11;
    $b=12;
}
changeValue($a,$b);
echo "$a ";
echo "$b";


?>