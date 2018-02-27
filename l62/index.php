<h3>Hướng đối tượng</h3>
<?php 
class People{
	const MAXIMUM_AGE = 150;
}

class Animal{
	const MAXIMUM_AGE = 400;
	static $table = 'animals';
	var $name;
	var $age;
	var $movingTimes = 0;

	function moving(){
		$this->movingTimes++;
		echo "Im '" . $this->name . "' and i am moving so far. moving ".$this->movingTimes." time ";
	}


	static function sua($convat){
		if($convat == 'cho'){
			echo "Gau gau!";;
		}else if($convat == 'meo'){
			echo "Meo meo!";
		}else{
			echo "khong biet keu gi!";
		}
	}
}

Animal::sua('meo');die;
// Animal::$table = 'k31b2';
// var_dump(Animal::$table);die;
// var_dump(People::MAXIMUM_AGE);die;
$cat = new Animal();
$cat->name = 'tung pham';
$cat->age = 19;

$cat->moving();

echo "<br>";

$dog = new Animal();
$dog->name = 'a le';
$dog->age = 90;
$dog->moving();
echo "<br>";
$cat->moving();
echo "<br>";
$cat->moving();

// var_dump($k31b2);


 ?>