<?php 
require_once 'app/controllers/auth/LoginController.php';
$ctr = new LoginController();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$ctr->getLogin();
}else{
	$ctr->postLogin();
}


 ?>