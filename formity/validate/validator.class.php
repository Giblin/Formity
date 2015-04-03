<?php
namespace Formity\Validate;
class Validator{
	
	protected $required;
	protected $rules;
	protected $data;
	protected $errorMessage;
		
	public function __construct(array $postData, array $rules){ //array $submitted,
		foreach($rules as $field=>$requerments ){
			$fieldRules = explode("||",$requerments);
			if(	$fieldRules[0] == 'required'){
				$this->required[] = $field;	
			}
			if(isset($fieldRules[1]) && !empty($fieldRules[1])){
				$this->rules[$field] = explode("=",$fieldRules[1]);
			}
		}
		$this->data = $postData;
	}
	
	public function getRequired(){
		echo 'Required: ';
		print_r( $this->required);
		echo "<br><br><br>Rules: ";
		print_r( $this->rules);
	}
	
	public function validate(){
		foreach($this->required as $requiredField){	
			if(!isset($this->data[$requiredField]) || empty($this->data[$requiredField])){
				$this->errorMessage[] = $requiredField." is required";
			}
		}
		if(empty($this->errorMessage))
			return true;
		else
			return $this->errorMessage;
	}
		
}
?>