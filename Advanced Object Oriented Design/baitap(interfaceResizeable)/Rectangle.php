<?php
    include_once ('Shape.php');
    include_once ('Resizeable.php');
    class Rectangle extends Shape implements Resizes 
    {
        public $width;
        public $height;
        public function Rectangle($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea(){
            return $this->height * $this->width;
        }
        public function calculatePerimeter(){
            return $this->getArea() * 2;
        }
        public function Resizes($number){
            return $this->getArea()* $number;
        }
    }
?>