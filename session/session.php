   <?php
  session_start() ; 
  $_SESSION['username']="Ujwal";
  $_SESSION['password']="Password 123";
   $_SESSION['email']="ujwalparajuli9@gmail.com";
   $_SESSION['start_time']=time();//record the session starting time
   echo "You have successfully saved your session";
   ?>