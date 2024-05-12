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
  setcookie('user',"John doe",time(),"/",1) ;// secure:0 or 1 in boolean(HTTP/HTTPS or HTTPS only )
  $user=isset($_COOKIE['user'])?$_COOKIE['user']:"Guest";
echo "welcome ".$user; 
   ?> 
</body>
</html>