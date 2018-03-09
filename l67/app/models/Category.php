<?php 
require_once 'app/models/database.php';
class Category extends database
{
	function getListCate(){
		$sql = "select * from categories";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}
	
}


 ?>