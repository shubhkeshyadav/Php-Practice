<?php
/*
	-	Higher level class should not depends on lower level class
	-	Low level code should be depends on abstruction
	-	It allow us to decouple our code
	-	Low level class should be hiden behind the abstraction
 */

Interface Test
{
	public function read();
}

Class Book implements Test
{
	public function read()
	{
		echo 'Read a book';
	}
}

Class DbBook
{
	private $book;
	public function __construct(Test $obj)
	{	
		$this->book = $obj;
		return $this->book;
	}
	public function rr()
	{
	  $this->book->read();
	}
}

$obj = new DbBook(new Book);
$obj->rr();

?>