<?php
    include 'app\DB\DB.php';

    Class UserModel
    {   
        private $db;
        
        public function __construct()
        {   
            $this->db = DB::connect();
        }

        public function listing()
        {   
            $data           = [];
            $params         = $_REQUEST;
            $sortBy         = '';
            $limit          = $params['length'];
            $start          = $params['start'];
            $orderBy        = isset($params['order'][0]['column'])?$params['order'][0]['column']:'';
            $orderByVal     = isset($params['order'][0]['dir'])?$params['order'][0]['dir']:'';

            $searchKeyword  = trim($params['search']['value']);

            $sql = "SELECT emp.id, photo,employee_name,email_address,contact_number,gender,DT.name as department,birthdate FROM employee_info as emp
            LEFT JOIN departments AS DT on DT.id = emp.department
            ";

            switch($orderBy)
            {
                case 1 :
                    $sortBy = "order by employee_name $orderByVal";
                break;
                case 2 :
                    $sortBy = "order by email_address $orderByVal";
                break;
                case 3 :
                    $sortBy = "order by contact_number $orderByVal";
                break;
                case 4 :
                    $sortBy = "order by gender $orderByVal";
                break;
                case 5 :
                    $sortBy = "order by DT.name $orderByVal";
                break;
                case 6 :
                    $sortBy = "order by birthdate $orderByVal";
                break;
                default:
                    $sortBy = "order by emp.id desc";

            }
            
            if($searchKeyword)
            {   
                $where[] = "employee_name LIKE '%$searchKeyword%'";
                $where[] = "email_address LIKE '%$searchKeyword%'";
                $where[] = "contact_number LIKE '%$searchKeyword%'";
                $where[] = "gender LIKE '%$searchKeyword%'";
                $where[] = "birthdate LIKE '%$searchKeyword%'";
                $where[] = "DT.name LIKE '%$searchKeyword%'";
                $sql.= " where ".implode(" OR ",$where);
            }

            if($sortBy)
            {
                $sql.=" $sortBy";
            }

            $stmt1          = $this->db->query($sql);
            $totalRecords   = count($stmt1->fetchAll());

            $recordsFiltered = $totalRecords;

            if(intval($limit) > 0)
            {
                $sql.=" LIMIT $start , $limit";
            }

            $stmt = $this->db->query($sql);
            $user = $stmt->fetchAll();

            
            if($user)
            {
                foreach($user as $arr)
                {   
                    $id = $arr['id'];
                    $photo = $arr['photo']?$arr['photo']:'no-image.jpg';
                    $btns = '<a href="user.php?action=edit&id='.$id.'"><button>Edit</button></a>&nbsp&nbsp';
                    $btns .= '<a href="user.php?action=delete&id='.$id.'" onclick="return confirm('."'Are you sure want to delete ?'".')"><button>Delete</button></a>';
                    $row = [
                        '<img width="100" src="uploads/'.$photo.'">',
                        $arr['employee_name'],
                        $arr['email_address'],
                        $arr['contact_number'],
                        ucfirst($arr['gender']),
                        $arr['department'],
                        date('d-m-Y',strtotime($arr['birthdate'])),
                        $btns
                    ];
                    $data[] = $row;
                }
            }

            $result = array( 
                    "recordsTotal"    => intval( $totalRecords ),  
                    "recordsFiltered" => intval($recordsFiltered),
                    "data"            => $data
                    );
            
            return $result;
        }   

        public function addNewRecord($arr)
        {   
            $columns_str1 = implode(',',array_keys($arr));
            $columns_str2 = ':'.implode(',:',array_keys($arr));

            $sql = "INSERT INTO employee_info ($columns_str1) VALUES ($columns_str2)";
            $stmt= $this->db->prepare($sql);
            return $stmt->execute($arr);
        }

        public function editRecord($arr,$id)
        {   
            $columns_str1 = implode('=?,',array_keys($arr)).'=?';
            $values = array_values($arr);
            $values[] = $id;

            $sql = "UPDATE employee_info SET $columns_str1 where id=?";
            $stmt= $this->db->prepare($sql);
            return $stmt->execute($values);
        }

        public function getDataByEmail($email)
        {   
            $email = trim($email);
            $stmt = $this->db->prepare("SELECT id FROM employee_info WHERE email_address=?");
            $stmt->execute([$email]); 
            return $stmt->fetch();
        }

        public function getDataById($id)
        {   
            $id     = trim($id);
            $stmt   = $this->db->prepare("SELECT * FROM employee_info WHERE id=?");
            $stmt->execute([$id]); 
            return $stmt->fetch();
        }

        public function deleteById($id)
        {   
            $this->deleteImageAlso($id);
            $sql = "DELETE FROM employee_info WHERE id = ?";
            return $this->db->prepare($sql)->execute([$id]);
        }

        private function deleteImageAlso($id)
        {
            $detail =  $this->getDataById($id);

            if($detail['photo'])
            {
                $path = 'uploads/'.$detail['photo'];
                unlink($path);
            }
        }

        public function getDepartments()
        {
            $stmt = $this->db->query("SELECT * FROM departments order by name");
            return $stmt->fetchAll();
        }

        public function getEducations()
        {
            $stmt = $this->db->query("SELECT * FROM educations order by name");
            return $stmt->fetchAll();
        }

        public function getHobbies()
        {
            $stmt = $this->db->query("SELECT * FROM hobbies order by name");
            return $stmt->fetchAll();
        }
    }
?>