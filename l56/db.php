<?php 
// tao ket noi den csdl
$host = '127.0.0.1'; // localhost
$dbname = 'northwind';
$dbUsername = 'root';
$dbPwd = '123456';

try{
	$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUsername, $dbPwd);

}catch(Exception $ex){
	die($ex->getMessage());
}

 ?>