<?php 
require_once 'lib.php';
$data = file_get_contents('data.txt');
$students = studentFormat($data);

 ?>

<html>
	<head></head>
	<body>
		<table>
			<thead>
				<tr>
					<th>MSSV</th>
					<th>Tên</th>
					<th>Quê quán</th>
					<th>
						<a href="create.php">Tạo mới</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($students as $st):
				 ?>
					<tr>
						<td><?php echo $st[0]; ?></td>
						<td><?php echo $st[1]; ?></td>
						<td><?php echo $st[2]; ?></td>
						<td>
							<a href="update.php?id=<?= $st[0]?>">Update</a>
							<a href="remove.php?id=<?= $st[0]?>">Remove</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</body>
</html>
