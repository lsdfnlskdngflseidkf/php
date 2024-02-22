<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setting Cookies</title>
</head>
<body>
   <?php
  setcookie("user","John doe",time()+3600,"/") ;
  setcookie("user","janice doe",time()+3600,"/") ;//modify the cookie name to janice doe
  setcookie('user',"John doe",time()-2600,"/") ;//deleting the cookie
  $user=isset($_COOKIE['user'])?$_COOKIE['user']:"Guest";
echo "welcome ".$user; 
   ?> 
</body>
</html>