<?php 
// lay toan bo du lieu trong bang category
require_once 'models/Category.php';
$cateList = Category::findOne(3);
var_dump($cateList);
 ?>