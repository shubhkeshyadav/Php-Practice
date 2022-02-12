<?php
	
	
	/**
	  * Friends bill after having dinner in restaurant
	  * __construct method called when object of it's class created.
	  * __destruct method called when the object of it's class destroy.
	  */

	Class Bill
	{
		public $dinner   = 20; // per person
		public $sweet    = 15; // per person 
		public $coldring = 8; // per perrson	

		public $final_bill = 0;

		public function __construct()
		{
			$this->final_bill = 12; // entry fee, automatically will add on your bill
		}

		public function __destruct() // it will called automatically when object will done there work
		{
			echo '<h2>Final bill is Rs.'.$this->final_bill.'</h2>';
		}

		public function dinner($person)
		{
			$this->final_bill += $this->dinner * $person;
			return $this;
		}

		public function sweet($person)
		{
			$this->final_bill += $this->sweet * $person;
			return $this;
		}

		public function coldring($person)
		{
			$this->final_bill += $this->coldring * $person;
			return $this;
		}
	}

	$obj_bill = new Bill;

	$obj_bill->dinner(2)->sweet(1)->coldring(2);
	
	


	





















	function pr($data , $exit = false) // temp functin
	{
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		if($exit)
		{
			die();
		}
	}

?>