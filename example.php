<!DOCTYPE>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formity Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php
spl_autoload_extensions(".class.php"); // comma-separated list
spl_autoload_register();
/*include_once('formity/formity.php');*/

$form = new formity\form('/validate_example.php','POST',array('id'=>'loginForm'));
$form->makeName(array(),false);
$form->makeAddress(array());
$emailLable = new Formity\Elements\Lable('Email',array('for'=>'email'));
$emailInput = new Formity\Elements\Input(array('id'=>'email','name'=>'email','class'=>'form-control'));
$form->addRow(array(),array(array($emailLable,$emailInput)));
echo $form->buildForm();


?>
</div>
</body>
</html>