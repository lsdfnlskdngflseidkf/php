<?php
// Define a variable representing the day of the week (Sunday = 1, Monday = 2, ..., Saturday = 7)
$day = 4; // For example, let's say we want to represent Thursday

// Use a switch-case statement to echo the day of the week based on the provided numbering scheme
switch ($day) {
    case 1:
        echo "Sunday\n";
        break;
    case 2:
        echo "Monday\n";
        break;
    case 3:
        echo "Tuesday\n";
        break;
    case 4:
        echo "Wednesday\n";
        break;
    case 5:
        echo "Thursday\n";
        break;
    case 6:
        echo "Friday\n";
        break;
    case 7:
        echo "Saturday\n";
        break;
    default:
        echo "Invalid day number\n";
}
?>
