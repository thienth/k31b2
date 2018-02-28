<?php 
class Category{
	const TABLE_NAME = 'categories';


	function getConnect(){
		$conn = new PDO("mysql:host=127.0.0.1;dbname=k31b2;charset=utf8;", "root", "123456");
		return $conn;
	}

	function getAll(){
		$sql = "select * from " . self::TABLE_NAME;
		$stmt = $this->getConnect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}

 ?>