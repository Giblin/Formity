<?php
function classloader($class){
	$parts = explode('\\', $class); //split out namespace
	$classname = strtolower(end($parts)); //get classname case insensitive	
	
	require_once(__DIR__.'/lib/'.$classname.'.php');
}
spl_autoload_register(__NAMESPACE__.'\classloader');


?>