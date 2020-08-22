<?php


Class CustomException extends Exception
{
	public function errorMessage11()
	{
		$error_msg = 'Error found of line no '.$this->getLine().' in fine name'.$this->getFile().'<br> errro is '.$this->getMessage().' is not a valid email address';

		return $error_msg;
	}
}

try
{
	$email = 'HHHHHHHH';

	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
	{
    	throw new customException($email);
  	}
}
catch(Exception $e)
{
	echo $e->errorMessage11();
}


?>