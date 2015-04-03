<?php
namespace Formity;
class Form_Column{
	
	private $attr;
	private $elements;
	
	public function __construct(array $attributes){
		$this->attr = $attributes;	
	}
	public function getColumn(){
		$tag = '<div ';
		if(!empty($this->attr)){
			foreach($this->attr as $name=>$val){
				$tag .= $name.'="'.$val.'"';	
			}
		}
		else{
			$tag .= 'class="col-xs-12"';
		}
		$tag .= '>';
		if(!empty($this->elements)){
			foreach($this->elements as $element){
				$tag .= $element->getTag();	
			}
		}
		$tag .= '</div>';
		return $tag;
	}
	public function addElement($element){
		$this->elements[] = $element;	
	}
}


?>