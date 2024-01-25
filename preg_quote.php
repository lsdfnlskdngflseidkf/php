<?php
$searchstring=preg_quote('://','/');
$input="https://www.bmcbkt.edu.np";
$pattern="/$searchstring/";
if(preg_match($pattern,$input)){
    echo "This is a URL";
}
else
    echo "This is not a URL";
?>