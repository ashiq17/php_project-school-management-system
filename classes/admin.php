<?php

require_once 'database.php';

class Admin {

    public function __construct() {
        $obj = new Database();
    }

    public function save_student_info($data, $files) {
    //        echo '<pre>';
    //        print_r($files);

        $target_dir = "student_image/";
        $target_file = $target_dir . basename($files["student_image"]["name"]);
    //        echo $target_file;
    //        exit();

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["student_image"]["tmp_name"]);

        if ($check !== false) {
            if (file_exists($target_file)) {
                $message = "Sorry, file already exists.";
                return $message;
            } else {
                if ($files["student_image"]["size"] > 500000) {
                    $message = "Sorry, your file is too large.";
                    return $message;
                } else {
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        return $message;
                    } else {
                        if (move_uploaded_file($files["student_image"]["tmp_name"], $target_file)) {
                            $student_image = $target_file;
                        } else {
                            $message = "Sorry, there was an error uploading your file.";
                            return $message;
                        }
                    }
                }
            }
        } else {
            $message = "File is not an image.";
            return $message;
        }
        $password=md5($data[student_password]);
        $sql = "INSERT INTO tbl_student (student_name,student_class,student_roll,fathers_name,mothers_name,student_email_address,student_password,student_contact_no,student_address,student_dob,student_gender,student_image)"
                . " VALUES('$data[student_name]','$data[student_class]','$data[student_roll]','$data[fathers_name]','$data[mothers_name]','$data[student_email_address]','$password','$data[student_contact_no]','$data[student_address]','$data[student_dob]','$data[student_gender]','$student_image')";
        if (!mysql_query($sql)) {
            die('Sql Error :' . mysql_error());
        } else {
            $message = 'Save Student Information Successfully !';
            return $message;
        }
    }

    public function select_all_student()
    {
        $sql="SELECT * FROM tbl_student ";
        $result=mysql_query($sql);
        return $result;
    }
    
    public function delete_student($student_id)
    {
        $sql="UPDATE tbl_student SET deletion_status=1 WHERE student_id='$student_id'";
        mysql_query($sql);
        header('Location:manage_student.php');
    }
    
    public function save_teacher_info($data)
    {
        $password=md5($data[teacher_password]);
        $sql="INSERT INTO tbl_teacher (teacher_name,teacher_email_address,teacher_password,teacher_gender,teacher_contact_no,teacher_address)"
                . " VALUES('$data[teacher_name]','$data[teacher_email_address]','$password','$data[teacher_gender]','$data[teacher_contact_no]','$data[teacher_address]')";
        if(!mysql_query($sql))
        {
            die('Sql Error :'. mysql_error());
        }
        else{
            $message='Save Category Information Successfully !';
            return $message;
        }
    }
    
    public function select_all_teacher()
    {
        $sql="SELECT * FROM tbl_teacher ";
        $result=mysql_query($sql);
        return $result;
    }
    
    public function select_all_class()
    {
        $sql="SELECT distinct class FROM tbl_course ";
        $result=mysql_query($sql);
        return $result;
    }
    
    public function select_all_course()
    {
        $sql="SELECT distinct course_name FROM tbl_course ";
        $result=mysql_query($sql);
        return $result;
    }

    

    public function assign_course_teacher($data)
    {
//        echo '<pre/>';
//        print_r($data);
//        exit();
//        $sql1="SELECT course_name from tbl_course WHERE course_id='$data[course_id]'";
//        $result1=mysql_query($sql1);
//        while($row=  mysql_fetch_assoc($result1))
//        $course_name=$row['course_name'];
//        $sql2="SELECT course_name from tbl_teacher WHERE teacher_id='$data[teacher_id]'";
//        $result2=mysql_query($sql2);
//        while($row=  mysql_fetch_assoc($result2))
//        $teacher_name=$row['teacher_name'];
        $sql="INSERT into tbl_course_teacher (class,course_name,teacher_name) "
                ."VALUES('$data[class]','$data[course_name]','$data[teacher_name]')";
        $result=mysql_query($sql);
        
        return $result;
    }
    
    public function make_class1_result($data)
    {
        $total_marks="$data[marks_bengali]"+"$data[marks_english]"+"$data[marks_mathematics]";
        $sql="INSERT into tbl_class1_result (student_roll,marks_bengali,marks_english,marks_mathematics,total_marks) "
                ."VALUES('$data[student_roll]','$data[marks_bengali]','$data[marks_english]','$data[marks_mathematics]','$total_marks')";
        $result=mysql_query($sql);
        return $result;
    }
    public function make_class2_result($data)
    {
        $total_marks="$data[marks_bengali]"+"$data[marks_english]"+"$data[marks_mathematics]";
        $sql="INSERT into tbl_class2_result (student_roll,marks_bengali,marks_english,marks_mathematics,total_marks) "
                ."VALUES('$data[student_roll]','$data[marks_bengali]','$data[marks_english]','$data[marks_mathematics]','$total_marks')";
        $result=mysql_query($sql);
        return $result;
    }
    public function make_class3_result($data)
    {
        $total_marks="$data[marks_bengali]"+"$data[marks_english]"+"$data[marks_mathematics]"+"$data[marks_social_science]"+"$data[marks_general_science]"+"$data[marks_religion]";
        $sql="INSERT into tbl_class3_result (student_roll,marks_bengali,marks_english,marks_mathematics,marks_social_science,marks_general_science,marks_religion,total_marks) "
                ."VALUES('$data[student_roll]','$data[marks_bengali]','$data[marks_english]','$data[marks_mathematics]','$data[marks_social_science]','$data[marks_general_science]','$data[marks_religion]','$total_marks')";
        $result=mysql_query($sql);
        return $result;
    }
    public function make_class4_result($data)
    {
        $total_marks="$data[marks_bengali]"+"$data[marks_english]"+"$data[marks_mathematics]"+"$data[marks_social_science]"+"$data[marks_general_science]"+"$data[marks_religion]";
        $sql="INSERT into tbl_class4_result (student_roll,marks_bengali,marks_english,marks_mathematics,marks_social_science,marks_general_science,marks_religion,total_marks) "
                ."VALUES('$data[student_roll]','$data[marks_bengali]','$data[marks_english]','$data[marks_mathematics]','$data[marks_social_science]','$data[marks_general_science]','$data[marks_religion]','$total_marks')";
        $result=mysql_query($sql);
        return $result;
    }
    public function make_class5_result($data)
    {
        $total_marks="$data[marks_bengali]"+"$data[marks_english]"+"$data[marks_mathematics]"+"$data[marks_social_science]"+"$data[marks_general_science]"+"$data[marks_religion]";
        $sql="INSERT into tbl_class5_result (student_roll,marks_bengali,marks_english,marks_mathematics,marks_social_science,marks_general_science,marks_religion,total_marks) "
                ."VALUES('$data[student_roll]','$data[marks_bengali]','$data[marks_english]','$data[marks_mathematics]','$data[marks_social_science]','$data[marks_general_science]','$data[marks_religion]','$total_marks')";
        $result=mysql_query($sql);
        return $result;
    }
    public function select_all_class1_student_roll()
    {
        $sql="SELECT * FROM tbl_student WHERE student_class=1";
        $result=mysql_query($sql);
        return $result;
    }
    public function select_all_class2_student_roll()
    {
        $sql="SELECT * FROM tbl_student WHERE student_class=2";
        $result=mysql_query($sql);
        return $result;
    }
    public function select_all_class3_student_roll()
    {
        $sql="SELECT * FROM tbl_student WHERE student_class=3";
        $result=mysql_query($sql);
        return $result;
    }
    public function select_all_class4_student_roll()
    {
        $sql="SELECT * FROM tbl_student WHERE student_class=4";
        $result=mysql_query($sql);
        return $result;
    }
    public function select_all_class5_student_roll()
    {
        $sql="SELECT * FROM tbl_student WHERE student_class=5";
        $result=mysql_query($sql);
        return $result;
    }
    
    public function save_notice_info($data)
    {
        
        $sql = "INSERT INTO tbl_notice (notice_topic,notice_details,notice_date)"
                . " VALUES('$data[notice_topic]','$data[notice_details]','$data[notice_date]')";
        if (!mysql_query($sql)) {
            die('Sql Error :' . mysql_error());
        } else {
            $message = 'Notice Uploaded Successfully !';
            return $message;
        }
    }
    
    public function select_all_notice()
    {
        $sql="SELECT * FROM tbl_notice WHERE deletion_status=0";
        $result=mysql_query($sql);
        return $result;
    }
    
    public function delete_notice($notice_id)
    {
        $sql="UPDATE tbl_notice SET deletion_status=1 WHERE notice_id='$notice_id'";
        mysql_query($sql);
        header('Location:manage_notice.php');
    }

    public function logout() 
    {
        session_destroy();
        session_start();
        $_SESSION['message'] = 'You Are Successfully Logout !';
        header('Location:index.php');
    }

}
