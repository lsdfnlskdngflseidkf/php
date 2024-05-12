<?php
$passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
$password = "Str0ngP@ss";
if (preg_match($passwordPattern, $password)) {
    echo "Valid password";
} else {
    echo "Invalid password";
}
?>