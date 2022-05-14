<?php

$date1 = "2022-05-13";
$date2 = "2022-05-01";

$obj1 = new DateTime($date1);
$obj2 = new DateTime($date2);

$objDiff = $obj1->diff($obj2);

echo '<pre>';

//print_r($objDiff);


// count params in method

// library vs helper


    $str = "user/10/city/20/page/02"; 
    $arr = explode('/',$str);
    $chunk = array_chunk($arr,2);
    
    $aa = [];
    foreach($chunk as $arr)
    {   
        $k = $arr[0];
        $v = $arr[1];
        $aa[$k] = $v;
    }
    
    print_r($aa);


    //Create an array like this: array('user'=>10,'city'=>20,'page'=>02); 

    // $i=0;
    // whle(isset($str[$i]))
    // {
    //     $temp = 'dfdsdfdf';
    // }

    // sql enjection

    // Laravel

    // aap/payjeht/djflsdfj::class

    // session()

    // $req->sesion()->forget('hell');

    // {{$a}} and {{!!$a!!}}
    //  o/p '$a'

    // with get doesn't goes to server csrf token

    // 
        /*
    Route::get('/sdfds',dfunctiU(){
        retur view('hello');
    });

    Route::view('/user','adim.form')->name('hello');
    //
    */

    // php artisan make : controller New
    // php artisan make : model New
    // php artisan make : view user/user/New

    // truncate and drop 
    // user table
    // 1 zyx f
    // 2 zyx f
    // 3 zyx m
    // 4 zyx m
    // update user set gender = if(gender = 'f','m','f')

    // 1 zyx f
    // 2 zyx f
    // 3 zyx m
    // 4 zyx m
    // .. zyx m
    // 10 zyx m
    // 

    // delete from user where id not in (
    //    select max(id) form user 
    //    group by name
     //   having count(id) > 1
    //)

    /**
     * Select * from user limit 5
     * Select * from user limit (0,3)
     * Select * from user limit (2,5)
     * enum & set 1,2,3,4
     */

     /**
      * 
      * users 
      * id name
      */
    
   

?>