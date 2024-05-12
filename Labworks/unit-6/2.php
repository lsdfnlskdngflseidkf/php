   <?php
  session_start() ; 
  $_SESSION['username']="Ujwal";
  $_SESSION['password']="Password 123";
   $_SESSION['email']="ujwalparajuli9@gmail.com";
   $_SESSION['start_time']=time();//record the session starting time
   echo "You have successfully saved your session";
   if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        echo "Welcome " . $_SESSION['username']."<br>";
        echo "Your email is " . $_SESSION['email'];
        echo "<br>";
    } else {
        echo "You haven't logged in yet. Please login first to continue";
    }
session_destroy();
   ?>