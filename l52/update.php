<?php 
$id = $_GET['id'];

require_once 'lib.php';
$data = file_get_contents('data.txt');
$students = studentFormat($data);

foreach ($students as $st) {
	if($st[0] == $id){
		$user = $st;
		break;
	}
}
if(!isset($user)){
	echo "Người dùng không tồn tại!";
	die;
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update_submit.php" method="get">
		<input type="hidden" name="id" value="<?php echo $user[0] ?>">
		<div>
			Họ và tên: <input type="text" name="fullname" value="<?php echo $user[1] ?>" placeholder="Ví dụ: Nguyễn Văn A">
		</div>
		<div>
			Quê quán: <input type="text" name="hometown" value="<?php echo $user[2] ?>" placeholder="Ví dụ: Cà Mau">
		</div>
		<div>
			<button type="submit">Cập nhật</button>
		</div>
	</form>
</body>
</html>