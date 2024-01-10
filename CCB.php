<?php

$day="sat";
switch($day){
    case "mon":
    case "tue":
    case "wed":
    case "thu":
    case "fri":
        echo    "Week days";
        break;
    case "sat":
    case "sun":
        echo "weekend";
        break;
    default:
    echo "day error";
}

?>