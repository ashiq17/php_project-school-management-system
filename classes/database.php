<?php

class Database{
    
    public function __construct() {
        $hostname='localhost';
        $username='root';
        $password='';
        $database_name='db_student_management_system';
        
        $conn=  mysql_connect($hostname,$username,$password);
        if($conn)
        {
            //echo 'Database Server Connected';
            mysql_select_db($database_name);
        }
        else{
            die('Database Server Not Connected !');
        }
        
    }
}