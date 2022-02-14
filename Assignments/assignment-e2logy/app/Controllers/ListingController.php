<?php
    include 'app/Models/UserModel.php';
    
    Class ListingController
    {   
        public $objModel;
        public function __construct()
        {
            $this->objModel = new UserModel();
        }

        public function getAjaxData()
        {       
            $data = $this->objModel->listing();
            return $data;
        }
    } 
?>