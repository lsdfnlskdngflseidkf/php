<?php
// Define a variable representing the day of the week
$day = 4; // For example, let's say we want to represent Thursday
// Use an elseif ladder to echo the day of the week based on the provided numbering scheme
if ($day == 1) {
    echo "Sunday\n";
} elseif ($day == 2) {
    echo "Monday\n";
} elseif ($day == 3) {
    echo "Tuesday\n";
} elseif ($day == 4) {
    echo "Wednesday\n";
} elseif ($day == 5) {
    echo "Thursday\n";
} elseif ($day == 6) {
    echo "Friday\n";
} elseif ($day == 7) {
    echo "Saturday\n";
} else {
    echo "Invalid day number\n";
}
?>
