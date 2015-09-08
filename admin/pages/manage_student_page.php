 <?php
    
if(isset($_GET['status']))
    {
        if($_GET['status']=='unpublished')
        {
            $student_id=$_GET['student_id'];
            $obj_admin->unpublished_student($student_id);
        }
        else if($_GET['status']=='published')
        {
            $student_id=$_GET['student_id'];
            $obj_admin->published_student($student_id);
        }
        else if($_GET['status']=='delete')
        {
            $student_id=$_GET['student_id'];
            $obj_admin->delete_student($student_id);
        }
    }


    $result=$obj_admin->select_all_student();
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Roll</th>
                        <th>Address</th>
                        <th>E-mail Address</th>
                        <th>Father's Name</th>
                        <th>Mother's name</th>
                        <th>Date Of Birth</th>
                        <th>Sex</th>
                        <th>Student's Image</th>
                        <th>Contact Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    while($row=  mysql_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['student_id']?></td>
                        <td class="center"><?php echo $row['student_name']?></td>
                        <td class="center"><?php echo $row['student_class'] ?></td>
                        <td class="center"><?php echo $row['student_roll'] ?></td>
                        <td class="center"><?php echo $row['student_address'] ?></td>
                        <td class="center"><?php echo $row['student_email_address'] ?></td>
                        <td class="center"><?php echo $row['fathers_name'] ?></td>
                        <td class="center"><?php echo $row['mothers_name'] ?></td>
                        <td class="center"><?php echo $row['student_dob'] ?></td>
                        <td class="center">
                            <?php 
                            if($row['student_gender']==1)
                            {
                                echo "Male";
                            }
                            else 
                            {
                                echo "Female";
                            }
                            ?></td>
                        <td class="center"><img src="<?php echo $row['student_image'] ?>"></td>
                        <td class="center"><?php echo $row['student_contact_no'] ?></td>
                        <td class="center">
                            
                            
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&student_id=<?php echo $row['student_id']?>">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>

