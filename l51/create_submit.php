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

$fileContent = "";
foreach ($students as $row) {
	
	$fileContent .= $row[0]."|".$row[1]."|".$row[2]."|end";
}

$file=@fopen('data.txt', 'w');
if(!$file)
    echo "Mở file không thành công";
else{
    
    fwrite($file, $fileContent);
    header('location: index.php');
}


 ?>