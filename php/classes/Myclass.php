<?php 
class Myclass{

	public function __construct(){
		echo "<h1>string</h1>";
	}

	public $myProparty = 'hello world';

	public function setProparty($prop){
		$this->myProparty = $prop;
		return $this;
	}

	public function showProparrty(){
		echo $this->myProparty, '<br>';
		return $this;
	}

	public function __destruct(){
		echo '<h2>Over</h2>';
	}
}

$myObject = new Myclass();

$myObject->showProparrty();

$myObject->setProparty("Hello World!");

$myObject->showProparrty();

$myObject1 = new Myclass();

$myObject1->setProparty('Hello Universe!');
$myObject->showProparrty();
$myObject1->showProparrty();

$myObject2 = new Myclass();
$myObject2->setProparty("Hello Dhaka!")->showProparrty()->setProparty("Hello Bangladesh")->showProparrty();