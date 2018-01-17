<?php 
// thu thập thông tin
$id = $_GET['id'];
$fullname = $_GET['fullname'];
$hometown = $_GET['hometown'];

// lấy ra danh sách sinh viên
require_once 'lib.php';
$data = file_get_contents('data.txt');
$students = studentFormat($data);


// tìm trong mảng xem có phần tử nào khớp với id thì thay đổi giá trị fullname và hometown trở thành giá trị mới
foreach ($students as $key => $st) {
	if($st[0] == $id){
		$students[$key][1] = $fullname;
		$students[$key][2] = $hometown;
		break;
	}
}
// lưu dữ liệu đã thay đổi sau đó redirect
if(saveFile('data.txt', $students)){
	header('location: index.php');
} else{
	echo "Lưu không thành công!";
}

 ?>