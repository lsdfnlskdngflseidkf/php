<?php
require_once "connecting.php";
if(isset($_POST['email'],$_POST['password'])){
    $email=$_POST['email'];
    $userpassword=md5($_POST['password']);
    $query="select * from accounts where email='$email'";
    $pass=$connection->query($query);

    $test=$pass->fetch_assoc();


    if($test['password']==$userpassword)
    {
      session_start();
      $_SESSION['username']='Ujwal';
      echo "Login successful";
    } 
    else{
      echo "Login failed please try again";
    }
}
else{
  ?>
<html>
<body>
<h2>Login</h2>
<form method="post" action="">
  Email: <input type="text" name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
<a href="signup.php">Signup</a> | <a href="forgotpassword.php">Forgot Password</a>
</body>
</html>
<?php
}
?>