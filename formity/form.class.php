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
	
	public function addRow(array $attributes ,array $elements){
		$this->row[] = new formrow($attributes);
		$this->row[$this->lastRow()]->addElements($elements);
	}
	public function makeName(array $attributes, $oneField = false){
		$name = new Premade\Namefield($oneField);
		$this->addRow($attributes,$name->getName());
	}
	public function makeAddress(array $attributes){
		$address = new Premade\Addressblock();
		foreach($address->getAddress() as $row){
			$this->addRow($attributes,$row);
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