<?php

/*
- A class should contain only one responsibility(job). 
- More job in a class may create more complexcity.
*/

Class SendEmail
{
	public static function send($emailId,$messese)
	{
		echo "Email has been sent";
	}
}

SendEmail::send('shubhkesh.yadav@outlook.com','Hi this is test message');


/*
above class contain only one send email responsibility
*/
?>