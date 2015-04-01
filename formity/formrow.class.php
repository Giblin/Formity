<?php
namespace Formity;
class Formrow{
	
	private $attr;
	private $elements;
	
	public function __construct(array $attributes){
		$this->attr = $attributes;	
	}
	
	public function getRow(){
		$tag = '<div class="row ';
		if(!empty($this->attr)){
			if($this->attr['class']){
				$tag .= $this->attr['class'];
				unset($this->attr['class']);
			}
			$tag .= '"';
			foreach($this->attr as $name=>$val){
				$tag .= $name.'="'.$val.'"';	
			}
		}
		else{
			$tag .= '"';
		}
		$tag .= '>';
		foreach($this->elements as $element){
			$tag .= $element->getTag();	
		}
		$tag .= '</div>';
		return $tag;
	}
	public function addElement($element){
		$this->elements[] = $element;	
	}
}
?>