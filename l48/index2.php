<?php 
require 'library.php';
$arr = [];
for ($i=0; $i < 100; $i++) { 
	$arr[] = rand(1, 100);
}

var_dump($arr);
$max = findMax($arr);
echo $max+10;