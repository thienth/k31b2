<?php 

// const HOMEPAGE = 'http://t3h.edu.vn';
define('HOMEPAGE', 'http://t3h.edu.vn');
function findMax($x){
	$max = 0;
	for ($i=0; $i < count($x); $i++) { 
		if($max <= $x[$i]){
			$max = $x[$i];
		}
	}

	return $max;
}



 ?>