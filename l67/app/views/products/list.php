<table>
	<thead>
		<tr>ID</tr>
		<tr>Name</tr>
		<tr>Price</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $p): ?>
			<tr>
				<td><?= $p->product_id?></td>
				<td>
					<a href="" title="">
						<?= $p->product_name?>
					</a>
				</td>
				<td><?= $p->price?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>