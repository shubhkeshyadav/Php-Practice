<?php

include 'app\Controllers\UserController.php';
error_reporting(0);

$objModel = new UserModel();
$obj = new UserController();


$request = $_REQUEST;

$departments = $objModel->getDepartments();
$educations = $objModel->getEducations();
$hobbies = $objModel->getHobbies();

if(isset($request['action']) && $request['action'] == 'useradd')
{   
    if(isset($request['type']) && $request['type'] == 'save')
    {   
        $response = $obj->validData();

        if($response)
        {   
            echo json_encode(['success' => false,'type' => 'error','errors' => $response]);exit;
        }

        $resp = $obj->addNewRecord();

        if($resp)
        {
            echo json_encode(['success' => true,'msg' => 'Record created successfully']);exit;
        }

        echo json_encode(['success' => false,'msg' => 'Error something went wrong']);exit;

    }
    else
    {
        require_once 'App\Views\add.php';
    }   
}
else if(isset($request['action']) && $request['action'] == 'edit')
{   
    $id     = $request['id'];
    if(isset($request['type']) && $request['type'] == 'save')
    {
        $response = $obj->validData($id);

        if($response)
        {   
            echo json_encode(['success' => false,'type' => 'error','errors' => $response]);exit;
        }

        $resp = $obj->editRecord($id);

        if($resp)
        {
            echo json_encode(['success' => true,'msg' => 'Record updated successfully']);exit;
        }

        echo json_encode(['success' => false,'msg' => 'Error something went wrong']);exit;
    }
    else
    {   
        $detail = $objModel->getDataById($id);
        
        if(!$detail)
            header('Location:index.php');

        require_once 'App\Views\edit.php';
    }
}
if(isset($request['action']) && $request['action'] == 'delete')
{
    $id     = $request['id'];
    $resp   = $objModel->deleteById($id);
    if($resp)
    {
        $msg = 'Record deleted successfully';
    }
    else
    {
        $msg = 'Error unable to delete record ?';
    }
    echo '<script>alert("'.$msg.'")</script>';
    header("Location:index.php");
}
else
{
    header('Location:index.php');
}

?>