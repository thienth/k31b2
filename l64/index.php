<?php 
require_once 'models/Product.php';

// tạo ra thực thể mới thuộc lớp Product
$model = new Product();
$products = $model->getAll();

 ?>
 <table>
 	<thead>
 		<tr>
 			<th>id</th>
 			<th>Tên sản phẩm</th>
 			<th>Hãng</th>
 			<th>Giá</th>
 			<th>Thời gian bảo hành</th>
 			<th>Mô tả</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($products as $p): ?>
 			<tr>
	 			<td><?= $p->product_id ?></td>
	 			<td>
	 				<a href="detail.php?id=<?= $p->product_id ?>">
	 					<?= $p->product_name ?>
	 				</a>
	 			</td>
	 			<td><?= $p->manufacturer ?></td>
	 			<td>$<?= $p->price ?></td>
	 			<td><?= $p->warranty ?> tháng</td>
	 			<td><?= $p->description ?></td>
	 		</tr>
 		<?php endforeach ?>
 		
 	</tbody>
 </table>