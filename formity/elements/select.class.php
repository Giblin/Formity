<?php
namespace Formity\Elements;
class Select{
	
	protected $attr;
	protected $options;
	
	public function __construct(array $attributes,array $options){
		$this->attr = $attributes;
		$this->options = $options;
	}
	public function getTag(){
		$tag = '<select  ';
		if(!empty($this->attr)){
			foreach($this->attr as $name=>$val){
				$tag .= $name.'="'.$val.'"';	
			}
		}
		
		$tag .= '>';
		if(!empty($this->options)){
			foreach($this->options as $val=>$text){
				$tag .= '<option value="'.$val.'">'.$text.'</option>';	
			}
		}
		$tag .= $this->text.'</select>';
		return $tag;
	}
}


?>