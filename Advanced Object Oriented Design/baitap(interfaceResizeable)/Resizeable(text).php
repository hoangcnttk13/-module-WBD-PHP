<?php

	include_once ('Circle.php');
	//chạy Circle
	$myCircle = new Circle (rand(1,5),"xanh");
	echo "<h3>CIRCLE</h3>";
	echo "Diện tích Circle : ". $myCircle->getArea()."<br>";
	$number = rand(1,10);
	echo "Màu : ". $myCircle->areaColor()."<br>";
	echo "Diện tích Circle tăng thêm ".$number." = ". $myCircle->Resizes($number)."<br>";

	include_once ('Rectangle.php');
	//chạy Rectangle
	$myRectangle = new Rectangle(2 , 4);
	echo "<h3>Rectangle</h3>";
	echo 'Diện tích Rectangle : '. $myRectangle->calculatePerimeter(). '<br>';
	echo 'Diện tích Rectangle tăng thêm : '.$number." = ". $myRectangle->Resizes($number) . '<br/>';

	include_once ('Square.php');
	//chạy Square
	$mySquare = new Square(3);
	echo "<h3>Square</h3>";
	echo 'Diện tích Square : '. $mySquare->calculateSquare(). '<br>';
	echo 'Diện tích Square tăng thêm : '.$number." = ". $mySquare->Resizes($number) . '<br/>';

?>