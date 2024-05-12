<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        echo "Welcome " . $_SESSION['username']."<br>";
        echo "Your email is " . $_SESSION['email'];
        echo "<br>";
    } else {
        echo "You haven't logged in yet. Please login first to continue";
    }
?>