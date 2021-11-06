<?php
include_once 'Parents.php';  
class Child extends Parents{
	public $num1 = 10;

	public function setNum1($value)
	{
		$this->num1 = $value;
	}

	public function getNum1()
	{
		return $this->num1;
	}

	public function sum(){
		return $this->num1 + $this->getNum();
	}
}