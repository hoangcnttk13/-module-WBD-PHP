<?php
	include_once ('Shape.php');
	include_once ('Resizeable.php');
	class Circle extends Shape implements Resizes
	{	
		public $radius;
		public $color;
		public function Circle ($radius,$color){
			$this->radius = $radius;
			$this->color = $color;
		}

		public function getArea(){
			return pow($this->radius, 2)*pi();
		}
		public function areaColor(){
			return $this->color;
		}

		public function Resizes($number){
			return $this->getArea() * $number;
		}						
	}
?>