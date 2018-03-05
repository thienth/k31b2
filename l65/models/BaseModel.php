<?php 
/**
* 
*/
class BaseModel
{
	var $host = '127.0.0.1';
	var $dbname = 'k31b1';
	var $dbusername = 'root';
	var $dbpwd = '123456';

	// Ham khoi tao
	// chay ngay lap tuc tai thoi diem new Object()
	function __construct(){
		// tao cau lenh ket noi den csdl va gan cho thuoc tinh connect
	}

	// lấy hết dữ liệu ở trong bảng ra ngoài
	public static function getAll(){

	}

	// Xoá dữ liệu trong csdl có id = $id
	public static function delete($id){

	}

}

 ?>