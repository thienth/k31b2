<?php 
require_once 'db.php';

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword']: null;
$sql = "select *
		from Employees
		where LastName like '%$keyword%' 
			or FirstName like '%$keyword%'
			or TitleOfCourtesy like '%$keyword%'";
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
				<th>Employee ID</th>
				<th>Employee Name</th>
				<th>Title</th>
				<th>Title Of Courtesy</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $pro): ?>
			<tr>
				<td><?php echo $pro['EmployeeID'] ?></td>
				<td><?php echo $pro['FirstName'] ?> <?php echo $pro['LastName'] ?> </td>
				<td><?php echo $pro['Title'] ?></td>
				<td><?php echo $pro['TitleOfCourtesy'] ?></td>
				<td>
					<a href="remove-employee.php?id=<?php echo $pro['EmployeeID'] ?>" title="">Remove</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>