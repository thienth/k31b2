<?php 
$a = 9;
$b = "9";
$i = 10;
// while($i<$a){
// 	echo "$i <br>";
// 	$i++;
// }
// 
// do{
// 	echo "$i <br>";
// 	$i++;
// }while($i<$a);

// for ($i=0; $i < $a; $i++) { 
// 	echo "$i <br>";
// }
$arr = [3,43,2,6,8,'t3h',0,32];
$arr2 = [
	'name' => 'van anh',
	'age' => 80,
	'hometown' => 'vinh phuc'
];
// echo "<pre>";
// var_dump($arr2['hometown']);die;
// for ($i=$a; $i >= 0 ; $i--) { 
// 	echo "$i <br>";
// }

// for ($i=count($arr)-1; $i >= 0 ; $i--) { 
// 	echo "$arr[$i] <br>";
// }
foreach ($arr2 as $v) {
	echo "$v <br>";
}
unset($arr2['age']);
echo '=================<br>';
foreach ($arr2 as $v) {
	echo "$v <br>";
}

 ?>