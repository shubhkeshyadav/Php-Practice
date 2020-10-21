<?php

Class Hotel
{	
	public $bill;

	public function dinner()
	{
		$this->bill = $this->bill+350;

		return $this;
	}

	public function sweet()
	{
		$this->bill = $this->bill+50;
		return $this;
	}

	public function coldrink()
	{
		$this->bill = $this->bill+35;
		return $this;
	}
}

$obj = new Hotel();

echo $obj->coldrink()->sweet()->bill;

?>