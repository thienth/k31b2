<?php 
// lay toan bo du lieu trong bang category
require_once 'models/Category.php';
$cateModel = new Category();
$cateList = $cateModel->getAll();
var_dump($cateList);
 ?>