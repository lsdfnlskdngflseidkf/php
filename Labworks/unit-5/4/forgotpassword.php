<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->select_db("accounts");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_email = $_POST["email"];
        $user_username = $_POST["username"];
        $sql = "SELECT * FROM accounts WHERE email='$user_email' AND username='$user_username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $new_password = "pass@123";
            $update_query = "UPDATE accounts SET password='$new_password' WHERE email='$user_email'";
            if ($conn->query($update_query) === TRUE) {
                echo "Password reset successful! Your new password is: " . $new_password;
            } else {
                echo "Error updating password: " . $conn->error;
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