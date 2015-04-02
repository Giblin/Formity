<?php
namespace Formity\Premade;
class Namefield{
	
	protected $elements;
	
	public function __construct($oneField = false){
		if($oneField){
			$this->elements = array(
				array(
					new \Formity\Lable('Full Name',array('for'=>'full_name')),
					new \Formity\Input(array('id'=>'full_name','name'=>'full_name','class'=>'form-control'))
				)
			);
			
		}
		else{
			$this->elements = array(
				array(
					new \Formity\Lable('First Name',array('for'=>'first_name')),
					new \Formity\Input(array('id'=>'first_name','name'=>'first_name','class'=>'form-control'))
				),
				array(
					new \Formity\Lable('Last Name',array('for'=>'last_name')),
					new \Formity\Input(array('id'=>'last_name','name'=>'last_name','class'=>'form-control'))
				)
			);	
		}
	}
	public function getName(){
		return $this->elements;
	}
}
?>
