<?php
    if(isset($_POST['btn']))
    {
        $message=$obj_admin->save_student_info($_POST,$_FILES);
    }

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
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Student</h2>
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
                    echo $message;
                    unset($message);
                }
            ?>
        </h3>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Name</label>
                        <div class="controls">
                            <input type="text" name="student_name" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Class</label>
                        <div class="controls">
                            <input type="text" name="student_class" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student ROll</label>
                        <div class="controls">
                            <input type="text" name="student_roll" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student E-mail Address</label>
                        <div class="controls">
                            <input type="text" name="student_email_address" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Password</label>
                        <div class="controls">
                            <input type="password" name="student_password" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Father's Name</label>
                        <div class="controls">
                            <input type="text" name="fathers_name" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Mother's Name</label>
                        <div class="controls">
                            <input type="text" name="mothers_name" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Gender</label>
                        <div class="controls">
                          <select name="student_gender">
                                <option value="">Select Status</option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Contact No.</label>
                        <div class="controls">
                            <input type="text" name="student_contact_no" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Date of Birth</label>
                        <div class="controls">
                            <input type="text" name="student_dob" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                              
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Address</label>
                        <div class="controls">
                            <textarea class="cleditor"  name="student_address" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Student Image</label>
                        <div class="controls">
                            <input type="file" class="cleditor"  name="student_image" id="textarea2" rows="3">
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