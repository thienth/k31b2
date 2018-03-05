<?php 
require_once 'models/Category.php';
class User extends Category{
	function getTableName(){
		echo "$this->table";
	}
}

 ?>