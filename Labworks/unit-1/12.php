<?php
    $month = date("n"); // get current month as a number (1-12)

    switch ($month) {
        case 12:
        case 1:
        case 2:
            echo "It is winter";
            break;
        case 3:
        case 4:
        case 5:
            echo "It is spring";
            break;
        case 6:
        case 7:
        case 8:
            echo "It is summer";
            break;
        case 9:
        case 10:
        case 11:
            echo "It is fall";
            break;
    }
?>