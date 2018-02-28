<?php 
class Product{
	const TABLE_NAME = 'products';

	function __construct($id = null, $name = null, $desc = null){
		$this->id = $id;
		$this->name = $name;
		$this->description = $desc;
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=k31b2;charset=utf8;", "root", "123456");
	}

	static function getAll(){
		$sql = "select * from " . self::TABLE_NAME;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}


	// Lay ra 1 ban ghi trong csdl co id = $id
	static function findOne($id){
		$model = new static();

		$sql = "select * from " . self::TABLE_NAME . " where id = $id";
		$stmt = $model->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	function insert(){

	}

	function update(){

	}

	function delete(){
		
	}

}

 ?>