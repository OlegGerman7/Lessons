<?php

class ValueObject
{

	private $red;
	private $green;
	private $blue;

	public function __construct($red, $green, $blue){
		$this->red   = $red;
		$this->green = $green;
		$this->blue  = $blue;
	}
	
	public function getRed(){
		return $this->red;
	}
	public function getGreen(){
		return $this->green;
	}
	public function getBlue(){
		return $this->blue;
	}

	public function setRed($value){
		if ($value < 0 || $value > 255) :
			echo 'color not valid';
		else :
			$this->red = $value;
		endif;
	}
	public function setGreen($value){
		if ($value < 0 || $value > 255) :
			echo 'color not valid';
		else :
			$this->green = $value;
		endif;
	}
	public function setBlue($value){
		if ($value < 0 || $value > 255) :
			echo 'color not valid';
		else :
			$this->blue = $value;
		endif;
	}

	public function equals($obj1, $obj2){
		if(is_object($obj1) && is_object($obj2)):
			if(
				$obj1->red   === $obj2->red &&
				$obj1->green === $obj2->green &&
				$obj1->blue  === $obj2->blue
			):
				return true;
			else:
				return false;
			endif;
		endif;
	}

	public static function random(){
		return new self(rand(0, 255), rand(0, 255), rand(0, 255));
	}

	public function mix($object){
		if(is_object($object)):
			$this->red   = ($this->red + $object->red) / 2;
			$this->green = ($this->green + $object->green) / 2;
			$this->blue  = ($this->blue + $object->blue) / 2;
			return $this;
		endif;
	}
}