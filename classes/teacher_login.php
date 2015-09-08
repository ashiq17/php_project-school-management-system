<?php
require_once 'database.php';
class Login {
    //put your code here
    public function __construct() {
        $obj=new Database();
        session_start();
    }
    
    public function check_teacher_login($data)
    {
        $password=md5($data['password']);
        $sql="SELECT * FROM tbl_teacher WHERE teacher_email_address='$data[email_address]' AND teacher_password='$password'";
        $result=  mysql_query($sql);
        $teacher_info=  mysql_fetch_assoc($result);
        if($teacher_info)
        {
           $_SESSION['name']=$teacher_info['teacher_name'];
           $_SESSION['teacher_id']=$teacher_info['teacher_id'];
            
            header('Location:master.php');
        }
        else{
           return 'User Id Or Password Invalid !'; 
        }
        
    }
}
