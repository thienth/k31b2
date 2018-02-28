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

	static function findOne($id){
		$model = new static();
		var_dump($model);die;
		$sql = "select * from " . self::TABLE_NAME . " where id = $id";
		$stmt = $model->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}

 ?>