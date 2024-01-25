<?php
$fooditem=array("momo","Fries","Mutton");
$myfoods=preg_grep("/m(\w+)/i   ",$fooditem);
foreach($myfoods as $food){
    echo $food." ";
}
?>