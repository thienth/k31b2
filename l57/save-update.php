<?php 
$ProductID = $_POST['ProductID'];
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


$sql = "update products 
		set	ProductName 		= '$ProductName', 
			SupplierID  		= $SupplierID, 
			CategoryID			= $CategoryID,

			QuantityPerUnit		= '$QuantityPerUnit', 
			UnitPrice			= $UnitPrice, 
			UnitsInStock 		= $UnitsInStock,

			UnitsOnOrder		= $UnitsOnOrder, 
			ReorderLevel		= $ReorderLevel, 
			Discontinued		= $Discontinued
		where ProductID			= $ProductID";

$stmt = $connect->prepare($sql);
$stmt->execute();
header('location: index.php');

 ?>