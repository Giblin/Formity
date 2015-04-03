<?php
namespace Formity\Elements;
class Input{
	
	private $attr;
	
	public function __construct(array $attributes){
		$this->attr = $attributes;
	}
	
	public function getTag(){
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