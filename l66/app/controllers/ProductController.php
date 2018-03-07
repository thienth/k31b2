<?php 
/**
* 
*/
require_once 'app/models/Product.php';
class ProductController
{
	
	public function index($id)
	{
		$model = new Product();
		$products = $model->getListProductByCateId($id);
		
		$title = 'Product list';
		$view = 'app/views/products/list.php';
		include_once 'app/views/layouts/main.php';
	}
}

 ?>