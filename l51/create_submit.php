<?php 
require_once 'lib.php';
$fullname = $_GET['fullname'];
$hometown = $_GET['hometown'];

$data = getFileContent('data.txt');
$maxId = count($data)+1;
$data[] = "$maxId|$fullname|$hometown";

$fileContent = "";
foreach ($data as $value) {
	if($value=="") continue;
	$fileContent .= "$value";
}

// var_dump	($fileContent);die;

$file=@fopen('data.txt', 'w');
if(!$file)
    echo "Mở file không thành công";
else{
    
    fwrite($file, $fileContent);
    echo "Thêm dữ liệu thành công";
}


 ?>