<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setting Cookies</title>
</head>
<body>
   <?php
  setcookie('User',"John doe",time()+3600,"/") ;
  setcookie('User2',"jane doe",time()+3600,"/","ujwalp.com.np") ;
   ?> 
</body>
</html>