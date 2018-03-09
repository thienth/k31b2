<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="public/plugins/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="" method="post" novalidate class="col-sm-4 col-sm-offset-4">
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" value="" placeholder="Email" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" value="" placeholder="Password" class="form-control">
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-success">Login</button>
				<a href="index.php" class="btn btn-danger">Cancel</a>
			</div>
		</form>
	</div>

	<script src="public/plugins/jquery/jquery.min.js"></script>
	<script src="public/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>