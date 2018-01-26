<?php 

// tao ket noi den csdl
$host = '127.0.0.1'; // localhost
$dbname = 'northwind';
$dbUsername = 'root';
$dbPwd = '123456';

try{
	$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUsername, $dbPwd);

}catch(Exception $ex){
	die($ex->getMessage());
}
// tạo lệnh sql
$sql = "select * from products";
// nạp lệnh sql vào kết nối (đến db)
$stmt = $connect->prepare($sql);
// thực thi câu lệnh với csdl
$stmt->execute();
// lấy toàn bộ kết quả trả về sau đó gán cho biến
$products = $stmt->fetchAll();
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
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $pro): ?>
			<tr>
				<td><?php echo $pro['ProductID'] ?></td>
				<td><?php echo $pro['ProductName'] ?></td>
				<td><?php echo $pro['UnitPrice'] ?></td>
				<td><?php echo $pro['UnitsInStock'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>





