<?php

$file = $_FILES;

$con = mysqli_connect("localhost","root","","image") or die('Unable To connect');


// store image through bindary data
if($file && true)
{
    $binaryData = file_get_contents($file['file']['tmp_name']);

    $sql = "insert into data (image) values(?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$binaryData);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
    echo $msg;
}

?>