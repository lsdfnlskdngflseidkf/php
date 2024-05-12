<?php
$stringtorev="Hello World!";
function string_reverse($string) {
    $string2="dummy text";
    $length = strlen($string);
    $j=0;
    for ($i = $length - 1; $i >= 0; $i--) {
        $string2[$j]= $string[$i];
        $j++;
    }
    return $string2;
}
$reverse=string_reverse($stringtorev);
echo $reverse;
?>