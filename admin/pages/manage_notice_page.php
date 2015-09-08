 <?php
    
if(isset($_GET['status']))
    {
        if($_GET['status']=='unpublished')
        {
            $notice_id=$_GET['notice_id'];
            $obj_admin->unpublished_notice($notice_id);
        }
        else if($_GET['status']=='published')
        {
            $notice_id=$_GET['notice_id'];
            $obj_admin->published_notice($notice_id);
        }
        else if($_GET['status']=='delete')
        {
            $notice_id=$_GET['notice_id'];
            $obj_admin->delete_notice($notice_id);
        }
    }


    $result=$obj_admin->select_all_notice();
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
                        <th>Notice Topic</th>
                        <th>Notice Details</th>
                        <th>Notice Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    while($row=  mysql_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['notice_id']?></td>
                        <td class="center"><?php echo $row['notice_topic']?></td>
                        <td class="center"><?php echo $row['notice_details'] ?></td>
                        <td class="center"><?php echo $row['notice_date'] ?></td>
                        <td class="center">
                            
                            
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&notice_id=<?php echo $row['notice_id']?>">
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

