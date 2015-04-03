<?php
namespace Formity;
class Form_Row{
	
	private $attr;
	private $columns;
	
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
		foreach($this->columns as $column){
			$tag .= $column->getColumn();	
		}
		$tag .= '</div>';
		return $tag;
	}
	public function addElements($elements){
		$colWidth = floor(12/count($elements));
		for($i=0; $i<count($elements); $i++){
			$this->columns[] = new Form_Column(array('class'=>'col-xs-'.$colWidth));
			foreach($elements[$i] as $element){
				$this->columns[$this->lastColumn()]->addElement($element);
			}
			
		}
			
	}
	private function lastColumn(){
		end($this->columns);
		$last_added_key = key($this->columns);
		reset($this->columns);
		return $last_added_key;
	}
}
?>