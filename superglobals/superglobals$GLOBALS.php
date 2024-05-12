<?php
$a=10;
$b=20;
function add(){
    $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
}
add();
echo $c;

?>