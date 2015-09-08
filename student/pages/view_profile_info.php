<?php
$student_id=$_SESSION['student_id'];
$result=$obj_student->select_student_info($student_id);
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
            <table border="2" class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Field Name</th>
                        <th>Info</th>
                        
                        
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    while($row=  mysql_fetch_assoc($result))
                    {
                    ?>
                    <tr><td>Student name</td><td><?php echo $row['student_name']?></td></tr>
                    <tr><td>Student Class</td><td><?php echo $row['student_class']?></td></tr>
                    <tr><td>Student Roll</td><td><?php echo $row['student_roll']?></td></tr>
                    <tr><td>Father's name</td><td><?php echo $row['fathers_name']?></td></tr>
                    <tr><td>Mother's name</td><td><?php echo $row['mothers_name']?></td></tr>
                    <tr><td>Student E-mail Address</td><td><?php echo $row['student_email_address']?></td></tr>
                    <tr><td>Student Address</td><td><?php echo $row['student_address']?></td></tr>
                    <tr><td>Gender</td><td><?php echo $row['student_gender']?></td></tr>
                    <tr><td>Date of Birth</td><td><?php echo $row['student_dob']?></td></tr>
                    <tr><td>Student Contact No</td><td><?php echo $row['student_contact_no']?></td></tr>
                    
                        
                        
                    
                   <?php } ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>