<?php

/*

If S is a subtype of T, then objects of type T may be replaced with objects of type S without altering any of the desirable properties of the program (correctness, task performed, etc.)

The principle says that objects must be replaceable by instances of their subtypes without altering the correct functioning of our system.

*/

interface CoffeeMachineInterface
{
	public function makeCoffee();
}

Class BasicMachine implements CoffeeMachineInterface
{
	public function makeCoffee()
	{
		echo "Basic coffee has been made<br>";
	}
}

Class PremiumMachine extends BasicMachine
{

	public function makeCoffeeNow($selection = 'basic')
	{
		if($selection == 'basic')
		{
			$this->makeCoffee(); // parent class object replaced here
		}
		else
		{
			$this->makeSpecialCoffee();
		}
	}

	public function makeSpecialCoffee()
	{
		echo "special coffee has been made<br>";
	}
}

$objChild = new  PremiumMachine();

$objChild->makeCoffeeNow('special');

?>