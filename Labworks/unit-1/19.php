<?php
function sumNumbers(...$numbers) {
    $sum = 0;
    
    foreach ($numbers as $num) {
        $sum += $num;
    }
    
    return $sum;
}

echo sumNumbers(1, 2, 3, 4, 5);
?>