<?php
	include_once ('Shape.php');
    include_once ('Resizeable.php');
    class Square extends Shape implements Resizes 
    {
        public $edge;
        public function Square($edge)
        {
            $this->edge = $edge;
        }
        public function getArea(){
            return $this->edge * $this->edge;
        }
        public function calculateSquare(){
            return $this->getArea();
        }
        public function Resizes($number){
            return $this->getArea()* $number;
        }
    }
?>