<?php 
class Product{
	
	var $table = 'products';

	// Hàm khởi tạo (được thực thi ngay khi có câu lệnh new Product() )
	function __construct(){
		$this->conn = 
			new PDO('mysql:host=127.0.0.1;dbname=k31b2;charset=utf8;', 
			'root', '123456');
	}

	function getAll(){

		$sql = "select * from $this->table";

		// $this->conn là kết nối đến csdl
		// prepare() nạp câu lệnh sql vào kết nối
		$stmt = $this->conn->prepare($sql);

		// Thực thi câu lệnh trên với csdl
		$stmt->execute();

		// lấy ra toàn bộ dữ liệu trả ra sau khi thực thi
		$result = 
				$stmt->fetchAll(
					PDO::FETCH_CLASS, get_class($this)
				);

		return $result;
	}

	function findOne($id){
		$sql = "select * from $this->table where product_id = $id";

		// $this->conn là kết nối đến csdl
		// prepare() nạp câu lệnh sql vào kết nối
		$stmt = $this->conn->prepare($sql);

		// Thực thi câu lệnh trên với csdl
		$stmt->execute();

		// lấy ra toàn bộ dữ liệu trả ra sau khi thực thi
		$result = 
				$stmt->fetchAll(
					PDO::FETCH_CLASS, get_class($this)
				);
		if(count($result) > 0){
			return $result[0];
		}

		return null;
	}

}

 ?>