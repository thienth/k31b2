<?php 
require_once 'models/BaseModel.php';
class Category extends BaseModel{
	
	protected $table = 'categories';

	protected function uppercaseName(){
		return strtoupper($this->name);
	}

	public function getTable(){
		echo $this->table;
	}


	// Hien thi danh sach danh muc trong db
	function getAll(){
		$query = "select * from ". $this->table;
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this)); // ép kiểu các phần tử là kết quả của câu lệnh select sang thành kiểu dữ liệu Category
		// var_dump($result);die;
		return $result;// ket qua cua cau lenh sql
	}

	// insert data vao trong table
	function insert(){
		$sql = "insert into " . $this->table;
		$sql .= " (name, description) ";
		$sql .= " values ";
		$sql .= " ('$this->name', '$this->description') ";

		$stmt = $this->connect->prepare($sql);

		$stmt->execute();
	}

	// update data vao trong table
	function update(){
		$sql = "update $this->table 
				set name = '$this->name',
					description = '$this->description'
				where id = $this->id";
		$stmt = $this->connect->prepare($sql);

		$stmt->execute();
	}

	// xoa data dua vao id
	function delete($id){
		$query = "delete from ". $this->table . " where id = $id";
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
	}

	// lay ra 1 ban ghi dua vao id
	function findOne($id){
		$query = "select * from ". $this->table . " where id = $id";
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		if(count($result) > 0) return $result[0];
		
		return null;
	}
}
 ?>
