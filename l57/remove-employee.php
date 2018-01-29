<?php 
$id = isset($_GET['id']) == true ? $_GET['id'] : -1;
require_once 'db.php';
$sql = "delete from Employees
		where EmployeeID = $id";

$stmt = $connect->prepare($sql);
$stmt->execute();

header('location: employee.php');


 ?>