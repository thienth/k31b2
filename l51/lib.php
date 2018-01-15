<?php 
function studentFormat($str){
	$arr = explode("|end", $str);
	$result = [];
	foreach ($arr as $value) {
		if(empty(trim($value))) {
			continue;
		}
		$studentInfo = explode("|", $value);
		$result[] = $studentInfo;
	}
	return $result;
}

 ?>