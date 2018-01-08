<?php 
// Luyen tap ve ham so

// b1 tạo hàm số randomArrElement($min, $max, $totalNumber)
// Yêu cầu: hàm trả về 1 mảng chứa $totalNumber phần tử
// có số nhỏ nhất bằng $min, số lớn nhất bằng $max
// VD: $arr = randomArrElement(1, 10, 5);
// => $arr = [1,2,1,3,5];
function randomArrElement($min, $max, $totalNumber){
	$arr = [];
	for ($i=0; $i < $totalNumber; $i++) { 
		$arr[] = rand($min, $max);
	}
	return $arr;
}

// b2: Sinh ra 1 mảng random có 20 phần tử (1 - 100)
// sắp xếp lại hàm theo thứ tự tăng dần
function sortArr($mang){
	for ($i=0; $i < count($mang); $i++) { 
		for ($j=$i+1; $j < count($mang); $j++) { 
			if($mang[$i] > $mang[$j]){
				$tmp = $mang[$i];
				$mang[$i] = $mang[$j];
				$mang[$j] = $tmp;
			}
		}
	}
	return $mang;
}
// b2: Sinh ra 1 mảng random có 20 phần tử (1 - 100)
// sắp xếp lại hàm theo thứ tự giảm dần


// b3: viết hàm lọc ra các số chẵn trong mảng 
// b4: viết hàm lọc ra các số lẻ trong mảng
// b5: tính tổng 2 số lớn nhất trong mảng
// b6: tìm tổ hợp 3 số trong mảng có thể chia hết cho cả 3 và 5

$testArr = randomArrElement(1, 100, 10);
var_dump($testArr);


$result = sortArr($testArr);
var_dump($result);



 ?>