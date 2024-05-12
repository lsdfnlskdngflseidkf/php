<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testing";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid email or password.";
        }
    }
    $conn->close();
    ?>
</body>
</html>