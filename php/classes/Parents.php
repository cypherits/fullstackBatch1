<?php 
class Parents{
	private $num = 5;

	public function setNum($value)
	{
		$this->num = $value;
	}

	protected function getNum()
	{
		return $this->num;
	}
}