<?php 
require_once 'app/models/database.php';
class Product extends database
{
	function getListProductByCateId($id){
		$sql = "select * from products where cate_id = $id";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}
	
}


 ?>