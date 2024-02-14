<?php
function sumNumbers(...$numbers) {
    // Initialize sum to 0
    $sum = 0;
    
    // Loop through each argument and add it to the sum
    foreach ($numbers as $num) {
        $sum += $num;
    }
    
    // Return the sum
    return $sum;
}

// Test the function
echo sumNumbers(1, 2, 3, 4, 5);
?>