<?php
$globalVariable = "I am global!";
function exampleGlobalScope() {
    $localVariable = "I am local!";
    echo "Inside function (local scope): $localVariable<br>";
    global $globalVariable;
    echo "Inside function (global scope): $globalVariable<br>";
}
exampleGlobalScope();
echo "Outside function (global scope): $globalVariable<br>";
function exampleStaticScope() {
    static $staticVariable = 0;
    $staticVariable++;
    echo "Inside static function (static scope): $staticVariable<br>";
}
exampleStaticScope();
exampleStaticScope();
exampleStaticScope();
?>
