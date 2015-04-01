<?php
namespace Formity;
class Form {
	
	private $action;
	private $method;
	private $attr;
	private $elements;
	
	public function __construct($action, $method, array $attributes = null){
		$this->action = $action;
		$this->method = $method;
		$this->attr = $attributes;
	}
	
	public function outputForm(){
		$form = '<form action="'.$this->action.'" method="'.$this->method.'" ';
		if($this->attr){
			foreach($this->attr as $name=>$val){
				$form .= $name.'="'.$val.'" ';
			}
		}
		$form .= '>';
		if(!empty($this->elements)){
			foreach($this->elements as $element){
				$form .= $element->getElement();
			}
		}
		$form .= '</form>';
		return $form;
	}
	
	public function addElement($tagType,array $attr= null){
		$tagType = __NAMESPACE__.'\\'.ucfirst($tagType);
		$this->elements[] = new $tagType($attr);	
	}
}
?>