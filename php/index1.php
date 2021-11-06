<?php

print('hello world!<br>');

echo "hello world!", '&copy;', date('d-m-Y'), "<br>";

// variables

$var = "hello world!<br>";

echo $var;

// data types

// string
echo 'hello world!', '<br>';

// string concat
echo 'hello world!'.' '.date('y'), '<br>';

// numeric
// int
echo 5, '<br>';
// float
echo 5.5, '<br>';
// octal
echo 011, '<br>';
// hex
echo 0xff, '<br>';
//binary
echo 0b1011, '<br>';
// boolian
echo true, '<br>';

$varNull = null;
var_dump($varNull);

$varObj = new mysqli();
echo "<br>";



$num = 5;

$num1 = 'a6';

$sum = $num + $num1;

echo $sum, '<br>';

function name(){
	global $num;
	$num = 7;
	echo $num;
}
name();

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

define('MY_CONST', 100);

echo MY_CONST;

const MY_CONST1 = "<br>Hello";

echo MY_CONST1;

$array1 = [5, 6, 7];
echo "<pre>";
print_r($array1);
echo "</pre>";

$array2 = [1 => 5, 6 => 6, 15 => 7];
echo "<pre>";
print_r($array2);
echo "</pre>";

$array3 = ['name' => 'azim', 'address' => 'kamalapur', 'age' => 31, true, '0' => 5];
echo "<pre>";
print_r($array3);
echo "</pre>";

echo $array2['15'];

$multidimensionalArray = [
	'captains' => [
		'bd' => 'mahmudullah',
		'in' => 'kohli',
		'pk' => 'babar'
	],
	'opener' => [
		'striker' => [
			'bd' => 'naim',
			'in' => 'rohit',
			'pk' => 'babar',
		],
		'nonStriker' => [
			'bd' => 'liton',
			'in' => 'rahul',
			'pk' => 'imam',
		]
	],
];
echo "<pre>";
print_r($multidimensionalArray);
echo "</pre>";

echo '<br>', $multidimensionalArray['opener']['striker']['bd'];

foreach ($multidimensionalArray as $key => $value) {
	if($key == 'captains'){
		foreach ($value as $cntr => $name) {
			echo "$name is the captain of $cntr", '<br>';
		}
	}else{
		foreach ($value as $type => $value1) {
			foreach ($value1 as $cntr => $name) {
				echo "$name is the opener of $cntr as $type", '<br>';
			}
		}
	}
}

$x = 'y';
$y = 'z';
$z = 5;
echo $$$x;


function add_five(&$hello){
	$hello += 5;
}

$num = 3;
echo "<br>$num";
add_five($num);
echo "<br>$num";

function sum($num1, $num2, &$sum, &$multiply){
	$sum = $num1 + $num2;
	$multiply = $num1 * $num2;
}

sum(5, 6, $s, $m);

echo "<br>$s";
echo "<br>$m<br>";

if(1 === true){
	echo "yes";
}else{
	echo "no";
}

?>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>