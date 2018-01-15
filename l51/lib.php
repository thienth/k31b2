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


function saveFile($filename, $data){

	$fileContent = "";
	foreach ($data as $row) {
		
		$fileContent .= $row[0]."|".$row[1]."|".$row[2]."|end";
	}

	$file=@fopen($filename, 'w');
	if(!$file)
	    return false;
	else{
	    
	    fwrite($file, $fileContent);
	    return true;
	}

}
 ?>
