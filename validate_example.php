<?php
spl_autoload_extensions(".class.php"); // comma-separated list
spl_autoload_register();
$rules = array(
	'first_name'=>'required',
	'last_name'=>'required',
	'address'=>'required',
	'city'=>'required',
	'state'=>'required',
	'zip'=>'required',
	'email'=>'required||email',
	'validate_regex'=>'required||regex=/(2|4)/',
	'validate_string'=>'required||string=1234',
	'phone'=>'not-required||phone'
);
$submited = new Formity\Validate\Validator($_POST,$rules);
$submited->getRequired();
//echo $submited->validate();
?>