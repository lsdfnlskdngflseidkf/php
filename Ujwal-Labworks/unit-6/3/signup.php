<?php
require_once "connecting.php";
if(isset($_SESSION['username'])){
    header("Location: home.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $email = $_POST["email"];

    $checkEmailQuery = "SELECT * FROM accounts WHERE email='$email'";
    $result = $connection->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Email already exists.";
    } else {
        $insertQuery = "INSERT INTO accounts (email,password,username) VALUES ('$email', '$password','$username')";
        if ($connection->query($insertQuery)) {
            echo "Signup successful";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $connection->error;
        }
    }
}
while(true){
    if(isset($_SESSION['username'])){
    header("Location: home.php");
  }
  }
?>
<html>
<body>
<h2>Signup</h2>
<form method="post" action="">
  Email: <input type="text" name="email"><br>
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>

  <input type="submit" value="Signup">
</form>
<a href="login.php">Login</a> | <a href="forgotpassword.php">Forgot Password</a><br>
</body>
</html>
