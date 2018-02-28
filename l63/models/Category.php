<?php 
class Category{
	const TABLE_NAME = 'categories';

	function __construct($id = null, $name = null, $desc = null){
		// $this->id = $id;
		// $this->name = $name;
		// $this->description = $desc;
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=k31b2;charset=utf8;", "root", "123456");
	}

	function capitalizeName(){
		return $this->name . "Da capitalize";
	}

	static function getAll(){
		$model = new static();
		$sql = "select * from " . self::TABLE_NAME;
		$stmt = $model->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}


	// Lay ra 1 ban ghi trong csdl co id = $id
	static function findOne($id){
		$model = new static();

		$sql = "select * from " . self::TABLE_NAME . " where id = $id";
		$stmt = $model->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		if(count($result) > 0){
			return $result[0];
		}else{
			return null;
		}
	}


}

 ?>