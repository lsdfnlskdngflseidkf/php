<?php
$ip_address="202.45.125.101";
$splitip=preg_split("/\./",$ip_address);
foreach($splitip as $value){
    echo "$value   ";
}
?>