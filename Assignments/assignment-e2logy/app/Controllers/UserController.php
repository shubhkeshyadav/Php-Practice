<?php
    include 'app/Models/UserModel.php';

    Class UserController
    {   
        public $objModel;

        public function __construct()
        {
            $this->objModel = new UserModel();
        }
        public $required_fields = ['employee_name','email_address','contact_number'];

        public function validData($edit_id = false)
        {
            $request    = $_REQUEST;  
            $errors     = [];
            
            foreach($this->required_fields as $fieldName)
            {  
                if(isset($request[$fieldName]) && empty($request[$fieldName]))
                {   
                    $errors[$fieldName] = "This is requied fields";
                }
                else if($fieldName == 'email_address')
                {
                    if(!filter_var($request[$fieldName], FILTER_VALIDATE_EMAIL))
                    {   
                        $errors[$fieldName] = "Valid email is requied";
                    }

                    // check unique email
                    $detail = $this->objModel->getDataByEmail($request[$fieldName]);
                    if($detail)
                    {   
                        if($edit_id ==true && $detail['id'] == $edit_id)
                        {

                        }
                        else
                        {
                            $errors[$fieldName] = "Email already being use";
                        }
                    }
                }
            }
            return $errors;
        }

        public function addNewRecord()
        {
            $request                        = $_REQUEST;  
            $arr                            =  [];
            $arr['employee_name']           = $request['employee_name'];
            $arr['email_address']           = $request['email_address'];
            $arr['gender']                  = $request['gender'];
            $arr['contact_number']          = $request['contact_number'];
            $arr['address']                 = $request['address'];
            $arr['photo']                   = $this->uploadPhoto();
            
            if($request['birthdate'])
            {
                $arr['birthdate']= date('Y-m-d',strtotime($request['birthdate']));
            }

            if($request['joining_date'])
            {
                $arr['joining_date']= date('Y-m-d',strtotime($request['joining_date']));
            }

            $arr['department']              = $request['department'];
            $arr['education']               = $request['education'];
            $arr['experience']              = $request['experience'];
            $arr['hobby']                   = $request['hobby'];
            return $this->objModel->addNewRecord($arr);
        }

        public function uploadPhoto()
        {   
            $imageName = '';
            $files = $_FILES['photo'];

            $target_dir = "uploads/";
            $temp = explode(".", $files["name"]);

            $newfilename = round(microtime(true)) . '.' . end($temp);
            $target_file = $target_dir . basename($newfilename);

            if (move_uploaded_file($files["tmp_name"], $target_file))
            {
                $imageName  = $newfilename;
            }
            else
            {
                $imageName = '';
            }

            return $imageName;
        }

        public function editRecord($id)
        {
            $request                        = $_REQUEST;  
            $arr                            =  [];
            $arr['employee_name']           = $request['employee_name'];
            $arr['email_address']           = $request['email_address'];
            $arr['gender']                  = $request['gender'];
            $arr['contact_number']          = $request['contact_number'];
            $arr['address']                 = $request['address'];
            $arr['photo']                   = $this->uploadPhoto();

            if($request['birthdate'])
            {
                $arr['birthdate']= date('Y-m-d',strtotime($request['birthdate']));
            }

            if($request['joining_date'])
            {
                $arr['joining_date']= date('Y-m-d',strtotime($request['joining_date']));
            }

            $arr['department']              = $request['department'];
            $arr['education']               = $request['education'];
            $arr['experience']              = $request['experience'];
            $arr['hobby']                   = $request['hobby'];

            return $this->objModel->editRecord($arr,$id);
        }
    } 
?>