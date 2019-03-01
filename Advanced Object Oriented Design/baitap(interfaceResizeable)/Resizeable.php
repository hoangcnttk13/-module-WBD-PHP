<?php
	interface Resizes {
		public function Resizes($number);
	}

	// abstract class Shape {
	// 	public $name;
	// 	public $color;
	// 	public abstract function getArea();
	// }

	// class Circle extends Shape implements Resizes
	// {
	// 	public $radius;
	// 	public function Circle ($radius){
	// 		$this->radius = $radius;
	// 	}

	// 	public function getArea(){
	// 		return pow($this->radius, 2)*pi();
	// 	}

	// 	public function Resizes($number){
	// 		return $this->getArea() * $number;
	// 	}						
	// }

	// $myCircle = new Circle (rand(1,5));
	// echo "Diện tích Circle : ". $myCircle->getArea()."<br>";
	// $number = rand(1,10);
	// echo "Diện tích Circle tăng thêm ".$number." = ". $myCircle->Resizes($number)."<br>";
	
?>