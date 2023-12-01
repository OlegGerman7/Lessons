<?php

class ValueObject
{
	private int $red;
	private int $green;
	private int $blue;

	public function __construct(int $red, int $green, int $blue){
		$this->setRed($red);
		$this->setGreen($green);
		$this->setBlue($blue);
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

	public function validation($value)
	{
		if ($value < 0 || $value > 255){
			return 'color not valid';
		} else {
			return false;
		}
	}

	public function setRed($value){
		if ($this->validation($value)){
			echo $this->validation($value);
		} else {
			$this->red = $value;
		}
	}
	public function setGreen($value){
		if ($this->validation($value)){
			echo $this->validation($value);
		} else {
			$this->green = $value;
		}
	}
	public function setBlue($value){
		if ($this->validation($value)){
			echo $this->validation($value);
		} else {
			$this->blue = $value;
		}
	}

	public function equals(ValueObject $obj1, ValueObject $obj2){
		return $obj1->red    === $obj2->red &&
				$obj1->green === $obj2->green &&
				$obj1->blue  === $obj2->blue;
	}

	public static function random(){
		return new self(rand(0, 255), rand(0, 255), rand(0, 255));
	}

	public function mix(ValueObject $object){
		$this->red   = ($this->red + $object->red) / 2;
		$this->green = ($this->green + $object->green) / 2;
		$this->blue  = ($this->blue + $object->blue) / 2;
		return $this;
	}
}