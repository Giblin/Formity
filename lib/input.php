<?php
namespace Formity;
class Input{
	
	private $attr;
	
	public function __construct(array $attributes){
		$this->attr = $attributes;
	}
	
	public function getElement(){
		$tag = '<input ';
		if(!empty($this->attr)){
			foreach($this->attr as $name=>$val){
				$tag .= $name.'="'.$val.'"';	
			}
		}
		
		$tag .= '>';
		return $tag;
	}
}


?>