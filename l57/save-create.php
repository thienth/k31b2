<?php 
$ProductName = $_POST['ProductName'];
$SupplierID = $_POST['SupplierID'];
$CategoryID = $_POST['CategoryID'];
$QuantityPerUnit = $_POST['QuantityPerUnit'];
$UnitPrice = $_POST['UnitPrice'];
$UnitsInStock = $_POST['UnitsInStock'];
$UnitsOnOrder = $_POST['UnitsOnOrder'];
$ReorderLevel = $_POST['ReorderLevel'];
$Discontinued = isset($_POST['Discontinued']) == true ? $_POST['Discontinued'] : 0;

require_once 'db.php';


$sql = "insert into products 
		(	ProductName, 
			SupplierID, 
			CategoryID,

			QuantityPerUnit, 
			UnitPrice, 
			UnitsInStock,

			UnitsOnOrder, 
			ReorderLevel, 
			Discontinued)
		values
		(
			'$ProductName', 
			$SupplierID, 
			$CategoryID,

			'$QuantityPerUnit', 
			$UnitPrice, 
			$UnitsInStock,

			$UnitsOnOrder, 
			$ReorderLevel, 
			$Discontinued

		)";
$stmt = $connect->prepare($sql);
$stmt->execute();
header('location: index.php');

 ?>