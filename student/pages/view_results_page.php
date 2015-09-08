<?php
    
    $result=$obj_student->select_results($student_id);
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
                        <th>#</th>
                        <th>Bengali</th>
                        <th>English</th>
                        <th>Mathematics</th>
                        <th>Social Science</th>
                        <th>General Science</th>
                        <th>Religion</th>
                        <th>Total</th>
                        
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    while($row=  mysql_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['student_roll']?></td>
                        <td class="center"><?php echo $row['marks_bengali']?></td>
                        <td class="center"><?php echo $row['marks_english'] ?></td>
                        <td class="center"><?php echo $row['marks_mathematics'] ?></td>
                        <td class="center"><?php echo $row['marks_social_science'] ?></td>
                        <td class="center"><?php echo $row['marks_general_science'] ?></td>
                        <td class="center"><?php echo $row['marks_religion'] ?></td>
                        <td class="center"><?php echo $row['total_marks'] ?></td>
                        
                    </tr>
                   <?php } ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>
