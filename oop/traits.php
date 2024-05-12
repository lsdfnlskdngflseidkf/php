<?php
trait hello {
	function Hello(){
		echo "Hello";

	}
}
trait world{
	function World(){
		echo " World";
	}
}
class Myclass{
	use hello,world;
}
$helloworld=new Myclass();
$helloworld->hello(); 
$helloworld->world();
?>
