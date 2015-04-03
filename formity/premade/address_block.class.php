<?php
namespace Formity\Premade;
class Address_Block{
	
	protected $elements;
	
	public function __construct(){
		$this->elements = array(
			array(
				array(
					new \Formity\Elements\Lable('Address',array('for'=>'address')),
					new \Formity\Elements\Input(array('id'=>'address','name'=>'address','class'=>'form-control'))
				)
			),
			array(
				array(
					new \Formity\Elements\Lable('City',array('for'=>'city')),
					new \Formity\Elements\Input(array('id'=>'city','name'=>'city','class'=>'form-control'))
				),
				array(
					new \Formity\Elements\Lable('State',array('for'=>'state')),
					new \Formity\Premade\Select_State(array('id'=>'state','name'=>'state','class'=>'form-control'))
				),
				array(
					new \Formity\Elements\Lable('Zip',array('for'=>'zip')),
					new \Formity\Elements\Input(array('id'=>'zip','name'=>'zip','class'=>'form-control'))
				)
			)
		);
	}

	public function getAddress(){
		return $this->elements;
	}
}
?>
