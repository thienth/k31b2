<?php 
$file = $_FILES['avatar'];
$filename = 'uploads/'. uniqid() . '-' .$file['name'];
move_uploaded_file($file['tmp_name'], $filename);


 ?>