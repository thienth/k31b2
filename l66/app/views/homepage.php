<table>
	<thead>
		<tr>ID</tr>
		<tr>Name</tr>
		<tr>Desc</tr>
	</thead>
	<tbody>
		<?php foreach ($cateList as $cate): ?>
			<tr>
				<td><?= $cate->id?></td>
				<td>
					<a href="cate-detail.php?id=<?= $cate->id?>" title="">
						<?= $cate->name?>
					</a>
				</td>
				<td><?= $cate->description?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>