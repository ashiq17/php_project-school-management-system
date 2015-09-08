<?php
require_once 'database.php';
class Login {
    //put your code here
    public function __construct() {
        $obj=new Database();
        session_start();
    }
    
    public function check_admin_login($data)
    {
        $password=md5($data['password']);
        $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$data[email_address]' AND admin_password='$password'";
        $result=  mysql_query($sql);
        $admin_info=  mysql_fetch_assoc($result);
        if($admin_info)
        {
           $_SESSION['name']=$admin_info['admin_name'];
           $_SESSION['admin_id']=$admin_info['admin_id'];
            
            header('Location:master.php');
        }
        else{
           return 'User Id Or Password Invalid !'; 
        }
        
    }
}
