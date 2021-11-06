<?php 
include_once 'Child.php';

$child = new Child();

echo $child->sum(), '<br>';

$child->setNum(15);

echo $child->sum(), '<br>';

$paarents = new Parents();
var_dump($paarents);