<?php
class Circle {

	private $radius;
	private $color;

	public function __construct ($radius,$color){
		$this->radius = $radius;
		$this->color = $color;
	}

	public function getRadius(){
		return $this->radius ;
	}

	public function getColor(){
		return $this->color;
	}

	public function getDientich(){
		return pow($this->radius,2)*pi();
	}

	public function toString (){
		echo "ban kinh duong tron: " .$this->radius. "<br>" ." màu sắc: " .$this->color . "<br>" ."dientich:".$this->getDientich()."<br>";
	}
}

class Cylinder  extends Circle
{
	private $height;

	public function __construct($radius,$color,$height)
	{
		parent::__construct($radius,$color);
		$this->height= $height;
	}

	public function thetich(){
		echo "Cylinder thetich:". $this->getDientich()*$this->height. "<br>";
	}

	public function toString(){
		echo "Cylinder height:" . $this->height. "<br>". "màu sắc: ".parent::getColor()."<br>";
	}

}
$myCircle= new Circle(9,"xanh");
	echo $myCircle ->toString()."<br>";
	
$myCylinder= new Cylinder(9,"đen",4);
	echo $myCylinder ->toString();
	echo $myCylinder ->thetich();
?>