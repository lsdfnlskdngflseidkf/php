<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setting Cookies</title>
</head>
<body>
   <?php
  setcookie("user","John doe",time()+3600,"/");
  echo "Cookie user value: " . (isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Cookie not set yet') . "<br>";
  
  setcookie("user","janice doe",time()+3600,"/"); //modify the cookie name to janice doe
  echo "Cookie user value: " . (isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Cookie not set yet') . "<br>";
  
//   setcookie('user',"John doe",time()-2600,"/"); //deleting the cookie
  echo "Cookie user value: " . (isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Cookie deleted') . "<br>";
  
  setcookie('user',"John doe",time(),"/",1); // secure:0 or 1 in boolean(HTTP/HTTPS or HTTPS only )
  echo "Cookie user value: " . (isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Cookie not set yet') . "<br>";
  
  $user=isset($_COOKIE['user'])?$_COOKIE['user']:"Guest";
  echo "Welcome " . $user; 
   ?> 
</body>
</html>