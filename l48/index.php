<?php 
require 'library.php';

$arr = [];
for ($i=0; $i < 10; $i++) { 
	$arr[] = rand(1, 100);
}

var_dump($arr);
findMax($arr);







 ?>
