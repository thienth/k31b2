<?php 
require_once 'app/models/Category.php';
class HomeController{
	public function homepage(){
		// lay danh sach danh muc trong csdl
		$model = new Category();
		$cateList = $model->getListCate();

		// tra ve views danh sach danh muc
		$view = 'app/views/homepage.php';
		$title = 'Homepage';
		include_once 'app/views/layouts/main.php';
	}
}

 ?>