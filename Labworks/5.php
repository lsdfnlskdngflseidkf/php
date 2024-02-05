<?php

// Global Scope
$globalVariable = "I am global!";

function exampleGlobalScope() {
    // Local Scope
    $localVariable = "I am local!";
    echo "Inside function (local scope): $localVariable<br>";
    /*Accessing global variable 
    without global keyword you cannot access it inside a function*/
    global $globalVariable;
    echo "Inside function (global scope): $globalVariable<br>";
}

// Calling the function with global scope
exampleGlobalScope();
echo "Outside function (global scope): $globalVariable<br>";

// Static Scope
function exampleStaticScope() {
    static $staticVariable = 0;
    $staticVariable++;
    echo "Inside static function (static scope): $staticVariable<br>";
}

// Calling the function with static scope
exampleStaticScope();
exampleStaticScope();
exampleStaticScope();
?>
