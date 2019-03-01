<?php
	include_once('Animal.php');
	include_once('Edible.php');

	class Chicken extends Animal implements Edible
	{
	    public function makeSound()
	    {
	        return "Gà: mổ-mổ!";
	    }

	    public function howToEat()
	    {
	        return "GÀ XỐI MỠ";
	    }
	}
?>