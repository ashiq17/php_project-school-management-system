<?php
require_once 'database.php';

class Parents {
    public function __construct() {
        $obj=new Database();
    }
    
    
    
    public function logout()
    {
        session_destroy();
        session_start();
        $_SESSION['message']='You Are Successfully Logout !';
        header('Location:index.php');
    }
}
