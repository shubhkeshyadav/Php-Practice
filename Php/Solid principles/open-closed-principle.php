<?php

/*
- A class should be open for extension(addition of more functionality) but closed for modification.
- According to this principle a application must be easily extensible with new feature without having modify its existing functionality 
*/

interface shape
{
	public function area();
}

Class Rectangle implements shape
{	
	private $height;
	private $width;
	public function __construct($height,$width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area()
	{
		return $this->height * $this->width;
	}
}

Class Square implements shape
{
	private $height;
	public function __construct($height)
	{
		$this->height = $height;
	}
	public function area()
	{
		return pow($this->height,2);//e.g 3*3
	}
}

$obj = new Rectangle(19,20);

echo $obj->area().'<br>';

$obj = new Square(2);

echo $obj->area().'<br>';

// in this example we can add multiple shapes with modifiying and class's code

?>