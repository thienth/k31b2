<?php 
require_once 'lib.php';
$fullname = $_GET['fullname'];
$hometown = $_GET['hometown'];

$data = file_get_contents('data.txt');
$students = studentFormat($data);
if(count($students) == 0){
	$maxId = 1;
}else{
	$maxId = $students[count($students)-1][0]+1;
}
$students[] = [$maxId, $fullname, $hometown];

if(saveFile('data.txt', $students)){
	header('location: index.php');
} else{
	echo "Lưu không thành công!";
}


?>
