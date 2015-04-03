<?php
namespace Formity\Premade;
class Name_Field{
	
	protected $elements;
	
	public function __construct($oneField = false){
		if($oneField){
			$this->elements = array(
				array(
					new \Formity\Elements\Lable('Full Name',array('for'=>'full_name')),
					new \Formity\Elements\Input(array('id'=>'full_name','name'=>'full_name','class'=>'form-control'))
				)
			);
			
		}
		else{
			$this->elements = array(
				array(
					new \Formity\Elements\Lable('First Name',array('for'=>'first_name')),
					new \Formity\Elements\Input(array('id'=>'first_name','name'=>'first_name','class'=>'form-control'))
				),
				array(
					new \Formity\Elements\Lable('Last Name',array('for'=>'last_name')),
					new \Formity\Elements\Input(array('id'=>'last_name','name'=>'last_name','class'=>'form-control'))
				)
			);	
		}
	}
	public function getName(){
		return $this->elements;
	}
}
?>
