<?php
abstract class test{
    abstract function Testing();
}
class another extends test{
    function Testing(){
        echo "This is an inherited abstract function that was overridden";
    }
}
$object=new another();
$object->Testing();
?>