<?php
    if(isset($_POST['btn']))
    {
        
        $message=$obj_admin->assign_course_teacher($_POST);
    }
        $all_class=$obj_admin->select_all_class();
        $select_all_course=$obj_admin->select_all_course();
        $select_all_teacher=$obj_admin->select_all_teacher();
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Assign Course Teacher</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
                if(isset($message))
                {
                    echo 'Teacher Assigned Succesfully!!';
                    unset($message);
                }
            ?>
        </h3>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post" >
                <fieldset>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Class</label>
                        <div class="controls">
                            <select name="class">
                                <option value="">Select Class</option>
                                <?php 
                                    while($row=  mysql_fetch_assoc($all_class))
                                    {
                                ?>
                                <option value="<?php echo $row['class']?>"><?php echo $row['class']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Course</label>
                        <div class="controls">
                            <select name="course_name">
                                <option value="">Select Course</option>
                                <?php
                                    while($row=  mysql_fetch_assoc($select_all_course))
                                    {
                                ?>
                                <option value="<?php echo $row['course_name']?>" ><?php echo $row['course_name']?></option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Teacher</label>
                        <div class="controls">
                            <select name="teacher_name">
                                <option value="">Select Teacher</option>
                                <?php
                                    while($row=  mysql_fetch_assoc($select_all_teacher))
                                    {
                                ?>
                                <option value="<?php echo $row['teacher_name']?>"><?php echo $row['teacher_name']?></option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div><!--/row-->


