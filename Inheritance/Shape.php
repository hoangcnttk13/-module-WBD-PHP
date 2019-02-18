<!DOCTYPE html>
<html>
<head>
	<title>Hệ các đối tượng hình học</title>
</head>
<body>
<?php
class Shape{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}
class Circle extends Shape{
 public $radius;

 public function __construct($name, $radius)
 {
 parent::__construct($name);
 $this->radius = $radius;
 }

 public function calculateArea(){
 return pi() * pow($this->radius, 2);
 }

 public function calculatePerimeter(){
 return pi() * $this->radius * 2;
 }
 
}
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo "".$circle->show();
?>
</body>
</html>