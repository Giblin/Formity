<?php
//This may become an unused file
function classloader($class){
	$parts = explode('\\', $class); //split out namespace
	$classname = strtolower(end($parts)); //get classname in all lowercase	
	
	require_once(__DIR__.$classname.'class.php');
}
spl_autoload_register(__NAMESPACE__.'\classloader');


?>