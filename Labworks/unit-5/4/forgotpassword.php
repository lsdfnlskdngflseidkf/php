<html>
<body>
    <?php
    require_once "connecting.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_email = $_POST["email"];
        $user_username = $_POST["username"];
        $sql = "SELECT * FROM accounts WHERE email='$user_email' AND username='$user_username'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            $new_password = "pass@123";
            $update_query = "UPDATE accounts SET password='$new_password' WHERE email='$user_email'";
            if ($connection->query($update_query) === TRUE) {
                echo "Password reset successful! Your new password is: " . $new_password;
            } else {
                echo "Error updating password: " . $connection->error;
            }
        } else {
            echo "Invalid username or email!";
        }
    }
    ?>
    <h2>Forgot Password</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Email: <input type="email" name="email" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        <input type="submit" name="submit" value="Reset Password">
    </form>
</body>
</html>