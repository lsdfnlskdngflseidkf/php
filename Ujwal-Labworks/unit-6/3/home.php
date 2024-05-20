<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>
        This is the home page content.
    </p>
    <p>
        <a href="logout.php">Logout</a>
    </p>
</body>
</html>