<?php
class Calculator
{
    public function add($a = null, $b = null, $c = null, $d = null)
    {
        $sum = 0;
        if ($a !== null) {
            $sum += $a;
        }
        if ($b !== null) {
            $sum += $b;
        }
        if ($c !== null) {
            $sum += $c;
        }
        if ($d !== null) {
            $sum += $d;
        }
        return $sum;
    }
}
$calculator = new Calculator();
echo $calculator->add(2, 3)."<br>";
echo $calculator->add(2, 3, 4)."<br>";
echo $calculator->add(2, 3, 4, 5)."<br>";
?>