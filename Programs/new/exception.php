<?php

// finally section will execute even if exception not handled

function hi()
{
    return 'hi';
}

try 
{   
    throw new LogicException("Throw logic \n");
} 
catch (InvalidArgumentException $e) 
{
    echo $e->getMessage(); 
}
finally
{
    echo hi(); // here hi will execute
}

// will stop execution of script

echo hi();

?>