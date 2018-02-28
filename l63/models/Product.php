<?php 
class Product{
	const TABLE_NAME = 'products';


	function getConnect(){
		$conn = new PDO("mysql:host=127.0.0.1;dbname=k31b2;charset=utf8;", "root", "123456");
		return $conn;
	}

	function getAll(){
		$sql = "select * from " . self::TABLE_NAME;
		var_dump($sql);die;
	}
}

 ?>