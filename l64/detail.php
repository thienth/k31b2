<?php 
// Lấy dữ liệu ra từ url
$id = $_GET['id'];

require_once 'models/Product.php';
$model = new Product();
$product = $model->findOne($id);

 ?>

 <fieldset>
 	<legend>
 		<b><?= $product->product_name?></b>
	</legend>
 	<p>Gía bán: <strong><?= $product->price?></strong></p>
 	<p>Hãng sản xuất: <strong><?= $product->manufacturer?></strong></p>
 	<p>Thời gian bảo hành: <strong><?= $product->warranty?></strong></p>
 	<p><?= $product->description?></p>
 </fieldset>