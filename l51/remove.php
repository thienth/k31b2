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



<?php 
function function_name(tham_so_1, tham_so_2,....,tham_so_n){
	// Viết mã cho hàm
	[return giá trị trả về;] 
}





function tinhTong($a, $b, $c){
	return $a+$b+$c;
}


$total = tinhTong(4,5); // $total = 9

echo tinhTong(3, 10); // Hiển thị giá trị 13









function hienThiLoi($msg){
	echo "<p style='color:red'>$msg</p>";
}

hienThiLoi('sai dinh dang');


function congThem3(&$number){
	$number += 3;
}

$a = 5;
echo congThem3($a); // Hiển thị 8
echo $a; // Hiển thị 8



 ?>




















