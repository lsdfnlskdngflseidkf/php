<?php
$year=2000;
if($year%4==0 && $year%100!==0){
    echo "The year $year is a leap year";
}
else if($year%400==0){
    echo "The year $year is a leap year";
}
else{
    echo "The year $year is not a leap year";
}

?>