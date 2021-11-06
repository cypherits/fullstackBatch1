<pre>
<?php

$fh = fopen('test.txt', 'w');
$x = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>";
fwrite($fh, $x);
fclose($fh);
$fh = fopen('test.txt', 'r');

$x = fread($fh, 9999);
echo $x;
fclose($fh);


$fh = fopen('test.txt', 'a');
$x = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>";
fwrite($fh, $x);
fclose($fh);

// $array = [
// 	'name' => 'Azim',
// 	'Address' => 'kamalapur',
// ];

// $array = json_encode($array);

// file_put_contents('test.json', $array);

$array = file_get_contents('test.json');
$array = json_decode($array, true);

// echo $array->name;
var_dump($array);