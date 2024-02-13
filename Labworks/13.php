<html>
    <body>
        <table border=3>
<?php
for ($i = 1; $i <= 10; $i++) { // change this to the desired number of rows
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) { // change this to the desired number of columns
        echo "<td>" . ($j * $i) . "</td>";
    }
    echo "</tr>";
}
?>
</table>

<p>Factorial of 5: <?php echo factorial(5); ?></p>
<p>Sum of odd numbers between 0-100: <?php echo sumOdd(0, 100); ?></p>
<p>Fibonacci series up to 15th terms: <?php echo fibonacci(15); ?></p>

<?php

function factorial($n) {
    $fact=1;
for($i=0;$i<=$n;$i++){
$fact*=$i;
}
return $fact;
}

function sumOdd($start, $end) {
    $sum = 0;
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}

function fibonacci($numofterms) {
    $first=0;
    $second=1; 
    $third;
    for($i=0;$i<$numofterms;$i++){
        echo $first." ";
        $third=$first+$second;
        $first=$second;
        $second=$third;
    }
}

?>
</body>
</html>