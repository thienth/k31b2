<?php 
// lay dc du lieu tuong ung cua san pham dc chon
$id =$_GET['id'];
require_once 'db.php';
$sql = "select * from Products where ProductID = $id";

$stmt = $connect->prepare($sql);
$stmt->execute();
$product = $stmt->fetch();

if(!$product){
	header('location: index.php');
}

$checked = $product['Discontinued'] == 1 ? "checked" : "";

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
	
	<form action="save-update.php" method="post">
		<input type="hidden" name="ProductID" value="<?php echo $product['ProductID'] ?>" placeholder="">
		Product Name: <input type="text" name="ProductName" value="<?php echo $product['ProductName'] ?>" placeholder="">
		<br>
		Supplier: <input type="number" name="SupplierID" value="<?php echo $product['SupplierID'] ?>" placeholder="">
		<br>
		Category: <input type="number" name="CategoryID" value="<?php echo $product['CategoryID'] ?>" placeholder="">
		<br>
		Quantity Per Unit: <input type="text" name="QuantityPerUnit" value="<?php echo $product['QuantityPerUnit'] ?>" placeholder="">
		<br>
		Unit Price: <input type="number" name="UnitPrice" value="<?php echo $product['UnitPrice'] ?>" placeholder="">
		<br>
		Units In Stock: <input type="number" name="UnitsInStock" value="<?php echo $product['UnitsInStock'] ?>" placeholder="">
		<br>
		Units On Order: <input type="number" name="UnitsOnOrder" value="<?php echo $product['UnitsOnOrder'] ?>" placeholder="">
		<br>
		ReorderLevel: <input type="number" name="ReorderLevel" value="<?php echo $product['ReorderLevel'] ?>" placeholder="">
		<br>
		Discontinued: <input type="checkbox" <?php echo $checked ?> name="Discontinued" value="1">
		<br>
		<button type="submit">Save</button>
	</form>
</body>
</html>