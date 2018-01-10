<?php 
$date= strtotime('1999-09-18');
// $now = strtotime(date('Y-m-d'));
// echo $now - $date;
$diff = date_diff(date_create('1999-09-18'), date_create('2018-01-10'));

echo $diff->format("%R%a days");


 ?>