<?php 
session_start();
require_once 'app/models/User.php';
class LoginController{
	function getLogin(){
		$title = "Đăng nhập";
		include_once 'app/views/auth/login.php';
	}

	function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		// lay du lieu trong bang users dua vao $email
		$model = new User();
		$user = $model->getUserByEmail($email);
		if($user){
			// compare password trong csdl voi $password
			if(password_verify($password, $user->password)){
				// neu dung tao session auth va dieu huong sang trang admin/index.php
				$_SESSION['auth'] = [
					'id' => $user->id,
					'name' => $user->name,
					'email' => $user->email,
					'role' => $user->role
				];
				header('location: admin/index.php');
			}
		}
		// neu sai hien thi lai view auth/login
		$title = "Đăng nhập";
		include_once 'app/views/auth/login.php';
		
	}
}
 ?>
