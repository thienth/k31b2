<?php 
$usernameErr = null;
$pwdErr = null;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$usernameErr = $username == "" ? "Vui lòng điền tài khoản" : null;
	$pwdErr = $pwd == "" ? "Vui lòng điền mật khẩu" : null;

	if($usernameErr == null && $pwdErr == null){
		echo "Chúc mừng $username đã đăng nhập thành công!";
		die;
	}
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="" method="post">
		<div>
			User name <input type="text" name="username" value="" placeholder="">
			<br>
			<span style="color:red"><?php echo $usernameErr; ?></span>
		</div>
		<div>
			Password <input type="password" name="password" value="" placeholder="">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>