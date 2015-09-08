<?php
require_once 'database.php';
class Student {
    public function __construct() {
        $obj=new Database();
    }
    
    public function select_all_notice()
    {
        $sql="SELECT * FROM tbl_notice WHERE deletion_status=0";
        $result=mysql_query($sql);
        return $result;
    }
    
    public function select_results($student_id)
    {
        $sql="SELECT * FROM tbl_student WHERE student_id=$student_id";
        $result=  mysql_query($sql);
        while($row=  mysql_fetch_assoc($result))
        {
            $student_class=$row['student_class'];
        }
        
        
        if($student_class=1)
        {
            $sql="SELECT * FROM tbl_class1_result ";
            $result=mysql_query($sql);
            return $result;
        } 
        if($student_class=2)
        {
            $sql="SELECT * FROM tbl_class2_result ";
            $result=mysql_query($sql);
            return $result;
        }
        if($student_class=3)
        {
            $sql="SELECT * FROM tbl_class3_result ";
            $result=mysql_query($sql);
            return $result;
        }
        if($student_class=4)
        {
            $sql="SELECT * FROM tbl_class4_result ";
            $result=mysql_query($sql);
            return $result;
        }
        if($student_class=5)
        {
            $sql="SELECT * FROM tbl_class5_result ";
            $result=mysql_query($sql);
            return $result;
        }
    }
    
    public function select_student_info($student_id)
    {
        $sql="SELECT * FROM tbl_student WHERE student_id=$student_id";
        $result=mysql_query($sql);
        return $result;
    }

    public function logout()
    {
        session_destroy();
        session_start();
        $_SESSION['message']='You Are Successfully Logout !';
        header('Location:index.php');
    }
}
