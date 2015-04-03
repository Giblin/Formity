<?php
namespace Formity\Elements;

class Lable{
	
	private $attr;
	private $text;
	
	public function __construct($lableText,array $attributes){
		$this->attr = $attributes;
		$this->text = $lableText;
	}
	
	public function getTag(){
		$tag = '<label  ';
		if(!empty($this->attr)){
			foreach($this->attr as $name=>$val){
				$tag .= $name.'="'.$val.'"';	
			}
		}
		
		$tag .= '>';
		$tag .= $this->text.'</label>';
		return $tag;
	}
}


?>