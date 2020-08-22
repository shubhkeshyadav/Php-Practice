<!-- 

Late static binding introduces a new use for the static keyword, which addresses this particular shortcoming. When you use static, it represents the class where you first use it, ie. it 'binds' to the runtime class.

Those are the two basic concepts behind it. The way self, parent and static operate when static is in play can be subtle, so rather than go in to more detail, I'd strongly recommend that you study the manual page examples. Once you understand the basics of each keyword, the examples are quite necessary to see what kind of results you're going to get.

-->

<?php

Class DB
{	

	protected static $table = 'user';

	public static function select()
	{
		echo "SELECT * FROM ".static::$table;
	}
}

Class animals extends DB
{
   protected static $table = 'animal';
}

$obj = new animals;

echo animals::select();

?>