<?php
$kathmandu = array(22.5, 24.2, 21.8, 19.7, 23.1, 25.4, 20.9);
$pokhara = array(18.3, 16.7, 19.5, 15.8, 17.2, 20.1, 16.4);
$newarray = array_merge($kathmandu, $pokhara);
$max = count($newarray);
rsort($newarray);
echo "The highest temperatures in the array are: " . $newarray[0] . "<br>" . $newarray[1] . "<br>" . $newarray[2] . "<br>";
sort($newarray);
echo "The lowest temperatures in the array are: " . $newarray[0] . "<br>" . $newarray[1] . "<br>" . $newarray[2] . "<br>";
?>