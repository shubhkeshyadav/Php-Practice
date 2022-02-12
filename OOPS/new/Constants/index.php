<?php
	 /**
	  * Constant are the name of identifier what holds fixed value
	  * Constants are like as veriable but constant's value can't change during script run
	  * There are two ways to define constants 1.- const 2.- define('const_name',const_val)
	  * "const" defines constants at compile time, whereas "define" defines them at run time.  
	  * The most "const"`s disadvantage is , const cannot be used to conditionally 

	  	*	if (...)
		*	{
		*    	const FOO = 'BAR';    // Invalid
		*	}
		*	
		*	// but
		*	
		*	if (...)
		*	{
		*		define('FOO', 'BAR'); // Valid
		*	}
	  */


	 Class Order
	 {	
		const discount      = 23;
		public $mango_price = 10; // per kg
		public $suger       = 40; // per kg
		public $final_amt   = 0;

		public $k = 23;
		

		
		public function __construct()
		{

		}

	 	public function mango($kg)
	 	{	
	 		$this->final_amt += ($this->mango_price*$kg)-Self::discount;

	 		return $this;
	 	}

	 	public function suger($kg)
	 	{
	 		$this->final_amt += ($this->suger*$kg)-Self::discount;
	 		return $this;
	 	}
	 }

	 $order = new Order;

	 $order->mango(5)->suger(1);

	 echo 'Final price is '.$order->final_amt;













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