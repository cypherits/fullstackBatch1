<?php

session_start();

echo $_SESSION['name'];

var_dump($_COOKIE);
echo "<br>".$_COOKIE['id'];