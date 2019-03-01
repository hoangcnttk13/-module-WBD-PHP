<?php

class Circle
{
	private $radius;
	private $name;

	function Circle($radius,$name)
	{
		$this->radius = $radius;
        $this->name = $name;
	}

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}
?>