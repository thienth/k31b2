<?php 
require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/User.php';

$model = new Category();
// echo $model->table;
// $model ->name = "pham van minh";
// echo $model->uppercaseName();
// echo $model->getTable();
echo $model->dbname;
 ?>