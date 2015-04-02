<?php
namespace Formity\Premade;
class Addressblock{
	
	protected $elements;
	
	public function __construct(){
		$this->elements = array(
			array(
				array(
					new \Formity\Lable('Address',array('for'=>'address')),
					new \Formity\Input(array('id'=>'address','name'=>'address','class'=>'form-control'))
				)
			),
			array(
				array(
					new \Formity\Lable('City',array('for'=>'city')),
					new \Formity\Input(array('id'=>'city','name'=>'city','class'=>'form-control'))
				),
				array(
					new \Formity\Lable('State',array('for'=>'state')),
					new \Formity\Selectstate(array('id'=>'state','name'=>'state','class'=>'form-control'))
				),
				array(
					new \Formity\Lable('Zip',array('for'=>'zip')),
					new \Formity\Input(array('id'=>'zip','name'=>'zip','class'=>'form-control'))
				)
			)
		);
	}

	public function getAddress(){
		return $this->elements;
	}
}
?>
