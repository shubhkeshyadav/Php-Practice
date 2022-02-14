<?php

include 'app\Controllers\ListingController.php';

if(isset($_GET['action_type']) && $_GET['action_type'] == 'userlist')
{   
    $obj = new ListingController();
    $resp = $obj->getAjaxData();
    echo json_encode($resp);exit;
}

require_once 'App\Views\listing.php';

?>