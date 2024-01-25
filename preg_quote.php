<?php
$searchstring=preg_quote("://","/");
$input="https://www.bmcbkt.edu.np";
$pattern="/$searchstring/";
if(preg_match($pattern,$input)){
    echo "URL";
}
else
    echo "not URL";
?>