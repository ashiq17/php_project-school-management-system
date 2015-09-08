<?php
require_once 'database.php';
class Login {
    //put your code here
    public function __construct() {
        $obj=new Database();
        session_start();
    }
    
    public function check_student_login($data)
    {
        $password=md5($data['password']);
        $sql="SELECT * FROM tbl_student WHERE student_email_address='$data[email_address]' AND student_password='$password'";
        $result=  mysql_query($sql);
        $student_info=  mysql_fetch_assoc($result);
        if($student_info)
        {
           $_SESSION['name']=$student_info['student_name'];
           $_SESSION['student_id']=$student_info['student_id'];
//           $_SESSION['class']=$student_info['student_class'];
            
            header('Location:master.php');
        }
        else{
           return 'User Id Or Password Invalid !'; 
        }
        
    }
}
