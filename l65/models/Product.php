<?php 
require_once 'models/BaseModel.php';
class Product extends BaseModel {
	
	var $table = 'products';
	
	// hàm tạo câu lệnh select * from products where $arr[0] = $arr[1]
	// sau đó lấy toàn bộ dữ liệu ra ngoài
	public function selectWhere($arr = []){

	}

	// thực hiện câu lệnh insert dữ liệu vào csdl bảng products
	public function insert(){

	}

	// thực hiện câu lệnh update dữ liệu vào csdl bảng products
	public function update(){

	}

}
 ?>
