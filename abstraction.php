<?php

Abstract Class BaseEmp
{	
	protected $first_name;
	protected $last_name;

	public function __construct($f,$l)
	{
		$this->first_name = $f;
		$this->last_name = $l;
	}

	Abstract public function get_monthly_salary();
		
	public function full_name()
	{
		return $this->first_name.' '.$this->last_name.', private method text - '.$this->test();
	}

	private function test()
	{
		return 'Hello';
	}

}

Class Full_time_emp extends BaseEmp
{	
	protected $anual_salary = 56000;

	public function get_monthly_salary()
	{
		return $this->anual_salary/12;
	}
}

$obj_full_time = new Full_time_emp('Shubhkesh','Yadav');

echo "Fullname= ".$obj_full_time->full_name();

echo "<br>";

echo "Monthly salary = ".$obj_full_time->get_monthly_salary();

//$obj = new BaseEmp('Shubhkesh','Yadav');

//echo $obj->full_name();


?>