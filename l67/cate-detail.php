<?php 
$id = $_GET['id'];
require_once 'app/controllers/ProductController.php';
$ctr = new ProductController();
$ctr->index($id);


 ?>