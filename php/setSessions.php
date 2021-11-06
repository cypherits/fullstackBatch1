<?php
session_start();

if(!isset($_SESSION['name'])){
	$_SESSION['name'] = 'azim';
	echo "set";
}else{
	echo "already set";
}

if(!isset($_COOKIE['id'])){
	setrawcookie('id', '5', 0, '', '', false, false);
}