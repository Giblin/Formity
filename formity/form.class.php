<?php
namespace Formity;
class Form {
	
	private $action;
	private $method;
	private $attr;
	
	private $row;
	
	public function __construct($action, $method, array $attributes = null){
		$this->action = $action;
		$this->method = $method;
		$this->attr = $attributes;
	}
	
	public function buildForm(){
		$form = '<form action="'.$this->action.'" method="'.$this->method.'" ';
		if($this->attr){
			foreach($this->attr as $name=>$val){
				$form .= $name.'="'.$val.'" ';
			}
		}
		$form .= '>';
		foreach($this->row as $row){
			$form .= $row->getRow();	
		}
		$form .= '</form>';
		return $form;
	}
	
	public function addRow(array $attributes = null ,array $elements){
		$this->row[] = new formrow($attributes);
		foreach($elements as $element){
			$this->row[$this->lastRow()]->addElement($element);
		}
	}
	public function makeName(array $attributes = null, $oneField = true){
		if($oneField){
			$lable = new Lable('Full Name',array('for'=>'full_name','class'=>'col-xs-12'));
			$field = new Input(array('id'=>'full_name','name'=>'full_name','class'=>'form-control'));
			$this->addRow(array(),array($lable,$field));
		}
		else{
			$lableFirst = new Lable('First Name',array('for'=>'first_name','class'=>'col-xs-6'));
			$fieldFirst = new Input(array('id'=>'first_name','name'=>'first_name','class'=>'form-control'));
			$this->addRow(array(),array($lableFirst,$fieldFirst));
			
			$lableLast = new Lable('Last Name',array('for'=>'last_name','class'=>'col-xs-6'));
			$fieldLast = new Input(array('id'=>'last_name','name'=>'last_name','class'=>'form-control'));
			$this->addRow(array(),array($lableLast,$fieldLast));	
		}
	}
	
	private function lastRow(){
		end($this->row);
		$last_added_key = key($this->row);
		reset($this->row);
		return $last_added_key;
	}
}
?>