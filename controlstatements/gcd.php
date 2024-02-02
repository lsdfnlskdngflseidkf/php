<?php
$a=10;
$b=8;
function FunctionName($a,$b){
    if($a%$b==0){
        return $b;
    }
    else
    return Functionname($b,$a%$b);
}

?>