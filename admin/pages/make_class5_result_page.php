<?php
if (isset($_POST['class5_result_btn'])) {

    $message = $obj_admin->make_class5_result($_POST);
}
$all_student_roll = $obj_admin->select_all_class5_student_roll();
//$select_all_course = $obj_admin->select_all_course();
//$select_all_teacher = $obj_admin->select_all_teacher();
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
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Insert Marks</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
            if (isset($message)) {
                echo 'Marks Inserted Successfully!!';
                unset($message);
            }
            ?>
        </h3>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post" >
                <fieldset>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Student Roll</label>
                        <div class="controls">
                            <select name="student_roll">
                                <option value="">Select Roll</option>
                                <?php
                                while ($row = mysql_fetch_assoc($all_student_roll)) {
                                    ?>
                                    <option value="<?php echo $row['student_roll'] ?>"><?php echo $row['student_roll'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Marks in Bengali</label>
                            <div class="controls">
                                <input type="text" name="marks_bengali" class="span6 typeahead" id="typeahead"  >

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Marks in English</label>
                            <div class="controls">
                                <input type="text" name="marks_english" class="span6 typeahead" id="typeahead"  >

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Marks in Mathematics</label>
                            <div class="controls">
                                <input type="text" name="marks_mathematics" class="span6 typeahead" id="typeahead"  >

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Marks in Social Science</label>
                            <div class="controls">
                                <input type="text" name="marks_social_science" class="span6 typeahead" id="typeahead"  >

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Marks in General Science</label>
                            <div class="controls">
                                <input type="text" name="marks_general_science" class="span6 typeahead" id="typeahead"  >

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Marks in Religion</label>
                            <div class="controls">
                                <input type="text" name="marks_religion" class="span6 typeahead" id="typeahead"  >

                            </div>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" name="class5_result_btn" class="btn btn-primary">Make Result</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>

                </fieldset>
            </form>
            </body>
            </html>

