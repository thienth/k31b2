<?php 
session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth']) ){
	header('location: ../login.php');
}

echo "Đăng nhập thành công, chào bạn " 
				. $_SESSION['auth']['name'];
 ?>
 <a href="../logout.php" title="">Logout</a>