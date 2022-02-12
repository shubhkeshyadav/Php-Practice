<?php
/*	-The Adapter Pattern is exactly what it is
	-It works to allow you to adapt your code to a new requirement that did not exist before
	-Adapter design pattern create a bridge between two incompatible interfaces
	-It comes under structural design pattern category
	-This design pattern has the capability to combine two independent or incompatible interface
	-It enables classes with incomptible interfaces to work together

	Real Life Example

	A card reader could be a case where it act as a adapter. Or we can say it works like a bridge between memory card and laptop. We insert memorycard into cardreader and insert cardreader into laptop. Then laptop can intrect with memory through cardreader
*/


// Exaple 1
Class SimpleBook
{
	private $bookName;
	private $bookAuthor;
	
	public function __construct($name,$author)
	{
		$this->bookName 	= $name;
		$this->bookAuthor 	= $author;
	}

	public function getBookName()
	{
		return $this->bookName;
	}

	public function getAuthorName()
	{
		return $this->bookAuthor;
	}
}

// now we need one method to get both bookname and author detal in one method  
	
Class BookAdapter
{
	public $objBook;

	public function __construct($name,$author)
	{
		$this->objBook  = new SimpleBook($name,$author);
	}

	public function getBookNameAndAuthor()
	{
		return $this->objBook->getBookName().' - '.$this->objBook->getAuthorName();
	}
}	

echo "<br>Example 1<br>";
$obj = new BookAdapter('Java','JK Singh');
echo $obj->getBookNameAndAuthor();
echo "<br>#############################<br>";

?>