 <?php
    
if(isset($_GET['status']))
    {
        if($_GET['status']=='unpublished')
        {
            $teacher_id=$_GET['teacher_id'];
            $obj_admin->unpublished_teacher($teacher_id);
        }
        else if($_GET['status']=='published')
        {
            $teacher_id=$_GET['teacher_id'];
            $obj_admin->published_teacher($teacher_id);
        }
        else if($_GET['status']=='delete')
        {
            $teacher_id=$_GET['teacher_id'];
            $obj_admin->delete_teacher($teacher_id);
        }
    }


    $result=$obj_admin->select_all_teacher();
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
                        <th>Teacher Name</th>
                        <th>Address</th>
                        <th>E-mail Address</th>
                        <th>Sex</th>
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
                        <td><?php echo $row['teacher_id']?></td>
                        <td class="center"><?php echo $row['teacher_name'] ?></td>
                        <td class="center"><?php echo $row['teacher_address'] ?></td>
                        <td class="center"><?php echo $row['teacher_email_address'] ?></td>
                        <td class="center">
                            <?php 
                            if($row['teacher_gender']==1)
                            {
                                echo "Male";
                            }
                            if($row['teacher_gender']==2)
                            {
                                echo "Female";
                            }
                            ?></td>
                        <td class="center"><?php echo $row['teacher_contact_no'] ?></td>
                        <td class="center">
                            
                            
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&teacher_id=<?php echo $row['teacher_id']?>">
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



