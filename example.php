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

$form = new formity\form('/login.php','POST',array('id'=>'loginForm'));
/*$user_name_label = new Formity\Lable('User Name',array('for'=>'username','class'=>'someClass'));
$user_name_input = new Formity\Input(array('id'=>'username','name'=>'username','class'=>'form-control'));
$form->addRow(array('class'=>'padding-down-20','id'=>'row1'),array($user_name_label,$user_name_input));*/
$form->makeName(array(),false);
$form->makeAddress(array());
$emailLable = new Formity\Lable('Email',array('for'=>'email'));
$emailInput = new Formity\Input(array('id'=>'email','name'=>'email','class'=>'form-control'));
$form->addRow(array(),array(array($emailLable,$emailInput)));
echo $form->buildForm();



/*$form->addLable('User Name',array('for'=>'username'));
$form->addInput('input',array('id'=>'username','name'=>'username','class'=>'form-control'));*/
//echo $form->startForm();
//$form->echoElement();
//echo $form->endForm();


?>
</div>
</body>
</html>