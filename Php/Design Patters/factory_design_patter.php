<?php
/*
	- In Factory Design patter we build the object we don't initiate the object
*/

Class Book
{
	private $name;
	private $author;

	public function __construct($name,$author)
	{
		$this->name = $name;
		$this->author = $author;
	}
	public function getNameAndAuthor()
	{
		return $this->name.' -- '. $this->author;
	}
}

Class BookFactory
{
	public static function create($bookName,$authorName)
	{
		return new Book($bookName,$authorName);
	}
}

$book1 = BookFactory::create('Java','James Gosline');
$book2 = BookFactory::create('Php','Rusmus Ledford');

echo $book1->getNameAndAuthor();
echo '<br>';
echo $book2->getNameAndAuthor();

?>