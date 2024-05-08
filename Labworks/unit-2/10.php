<?php
$email = "username@domain.com";
$emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
if (preg_match($emailPattern, $email)) {
    echo "Valid email address";
} else {
    echo "Invalid email address";
}
?>