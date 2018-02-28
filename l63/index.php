<?php 
// lay toan bo du lieu trong bang category
require_once 'models/Category.php';
$cateList = Category::getAll();
// var_dump($cateList);die;
 ?>


 <table>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Desc</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($cateList as $value): ?>
 		<tr>
 			<td><?php echo $value->id ?></td>
 			<td><?php echo $value->capitalizeName() ?></td>
 			<td><?php echo $value->description ?></td>
 		</tr>
 			
 		<?php endforeach ?>
 	</tbody>
 </table>