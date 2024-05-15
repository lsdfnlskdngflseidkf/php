<?php
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
function dynamicCall($functionName, ...$args){
    if($functionName=="gcd"){
        return $functionName($args[0],$args[1]);
    }
    elseif($functionName=="factorial"){
       return $functionName($args[0]);
    }        
}
echo "GCD of 12 and 18 is: " . dynamicCall('gcd', 12, 18) . "<br>"; // Output: GCD of 12 and 18 is: 6
echo "Factorial of 5 is: " . dynamicCall('factorial', 5) . "<br>"; // Output: Factorial of 5 is: 120
?>