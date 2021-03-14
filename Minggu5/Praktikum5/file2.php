<?php 
class Circle implements Shape{
	private $radius;

	public function _construct($radius)
	{
		$this -> radius = $radius;
	}

	// calcArea calculates the area of circle
	public function calcArea()
	{
		return $this -> radius * $this -> radius * pi ();
	}
 }
 ?>
