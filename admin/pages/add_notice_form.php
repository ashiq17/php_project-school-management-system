<?php
    if(isset($_POST['btn']))
    {
        $message=$obj_admin->save_notice_info($_POST);
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
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Notice</h2>
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
                        <label class="control-label" for="typeahead">Notice Topic</label>
                        <div class="controls">
                            <input type="text" name="notice_topic" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Notice Details</label>
                        <div class="controls">
                            <textarea class="cleditor"  name="notice_details" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Notice Date</label>
                        <div class="controls">
                            <input type="text" name="notice_date" class="span6 typeahead" id="typeahead"  >
                           
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