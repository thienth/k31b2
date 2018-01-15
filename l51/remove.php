<?php 
require_once 'lib.php';
$id = $_GET['id'];
$data = file_get_contents('data.txt');
$students = studentFormat($data);
for ($i=0; $i < count($students); $i++) { 
	if($students[$i][0] == $id){
		array_splice($students, $i, 1);
		break;
	}
}
saveFile('data.txt', $students);
header('location: index.php');




 ?>