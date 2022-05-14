<?php

Class Singlton
{
    public static $obj;

    private function __construct()
    {

    }

    //

    //

    //

    public static getObj()
    {
        if(empty(self::$obj))
        {
            self::$obj = new Singlton();
            return self::$obj;
        }
        else
        {
            return self::$obj;
        }
    }
}

?>


// pim
// DAM
// CMS

let vs const

explane vs desc db query

how many qeury are being exuted


echo adddate(now(),'-1 ')

emp
id ,code ,name

select code ,name from table

group by code,name

having count(code) > 1


cust

id , name , email

order by email

order by substring(email,1,'@') desc

port no mysql 
