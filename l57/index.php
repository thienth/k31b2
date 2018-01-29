<?php 
require_once 'db.php';
$keyword = isset($_GET['keyword']) == true 
					? $_GET['keyword'] : null;

// tạo lệnh sql
$sql = "select * 
		from products 
		where ProductName like '%$keyword%' ";

// nạp lệnh sql vào kết nối (đến db)
$stmt = $connect->prepare($sql);
// thực thi câu lệnh với csdl
$stmt->execute();
// lấy toàn bộ kết quả trả về sau đó gán cho biến
$products = $stmt->fetchAll();
// var_dump($products);die;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="get">
		<input type="text" name="keyword" value="" placeholder="">
		<button type="submit">Search</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Unit In Stock</th>
				<th>
					<a href="create.php" title="">Add Product</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $pro): ?>
			<tr>
				<td><?php echo $pro['ProductID'] ?></td>
				<td><?php echo $pro['ProductName'] ?></td>
				<td><?php echo $pro['UnitPrice'] ?></td>
				<td><?php echo $pro['UnitsInStock'] ?></td>
				<td>
					<a href="update-product.php?id=<?php echo $pro['ProductID'] ?>" title="">Update</a>
					<a href="remove-product.php?id=<?php echo $pro['ProductID'] ?>" title="">Remove</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>





