<?php
session_start();
session_unset();
session_destroy();
echo "You have destroyed your session";
?>