<?php
Class DB
{
    public static function connect()
    {   
        try
        {   
            return new PDO('mysql:host=localhost;dbname=shubhkesh_yadav', 'root', '');
        }
        catch(Excetpion $e)
        {
            die($e->getMessage());
        }
    }
}


?>