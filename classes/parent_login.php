<?php
require_once 'database.php';
class Login {
    //put your code here
    public function __construct() {
        $obj=new Database();
        session_start();
    }
    
    public function check_parent_login($data)
    {
        $password=md5($data['password']);
        $sql="SELECT * FROM tbl_parent WHERE parent_email_address='$data[email_address]' AND parent_password='$password'";
        $result=  mysql_query($sql);
        $parent_info=  mysql_fetch_assoc($result);
        if($parent_info)
        {
           $_SESSION['name']=$parent_info['parent_email_address'];
           $_SESSION['parent_id']=$parent_info['parent_id'];
            
            header('Location:master.php');
        }
        else{
           return 'User Id Or Password Invalide !'; 
        }
        
    }
}
