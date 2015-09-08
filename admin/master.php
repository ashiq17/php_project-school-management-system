<?php
ob_start();

session_start();
require_once '../classes/admin.php';
$obj_admin = new Admin();


if (!isset($_SESSION['admin_id'])) {
    header('Location:index.php');
}

if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 'true') {
        $obj_admin->logout();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Chopinagar Primary School Admin Portal</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="../asset/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="../asset/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="../asset/admin/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="../asset/admin/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="../asset/admin/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="../asset/admin/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="../asset/admin/img/favicon.ico">
        <!-- end: Favicon -->




    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.html"><span>Metro</span></a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <li class="dropdown hidden-phone">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white warning-sign"></i>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="dropdown-menu-title">
                                        <span>You have 11 notifications</span>
                                        <a href="#refresh"><i class="icon-repeat"></i></a>
                                    </li>	
                                    <li>
                                        <a href="#">
                                            <span class="icon blue"><i class="icon-user"></i></span>
                                            <span class="message">New user registration</span>
                                            <span class="time">1 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon green"><i class="icon-comment-alt"></i></span>
                                            <span class="message">New comment</span>
                                            <span class="time">7 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon green"><i class="icon-comment-alt"></i></span>
                                            <span class="message">New comment</span>
                                            <span class="time">8 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon green"><i class="icon-comment-alt"></i></span>
                                            <span class="message">New comment</span>
                                            <span class="time">16 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon blue"><i class="icon-user"></i></span>
                                            <span class="message">New user registration</span>
                                            <span class="time">36 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                            <span class="message">2 items sold</span>
                                            <span class="time">1 hour</span> 
                                        </a>
                                    </li>
                                    <li class="warning">
                                        <a href="#">
                                            <span class="icon red"><i class="icon-user"></i></span>
                                            <span class="message">User deleted account</span>
                                            <span class="time">2 hour</span> 
                                        </a>
                                    </li>
                                    <li class="warning">
                                        <a href="#">
                                            <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                            <span class="message">New comment</span>
                                            <span class="time">6 hour</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon green"><i class="icon-comment-alt"></i></span>
                                            <span class="message">New comment</span>
                                            <span class="time">yesterday</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon blue"><i class="icon-user"></i></span>
                                            <span class="message">New user registration</span>
                                            <span class="time">yesterday</span> 
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-sub-footer">
                                        <a>View all notifications</a>
                                    </li>	
                                </ul>
                            </li>
                            <!-- start: Notifications Dropdown -->
                            <li class="dropdown hidden-phone">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white tasks"></i>
                                </a>
                                <ul class="dropdown-menu tasks">
                                    <li class="dropdown-menu-title">
                                        <span>You have 17 tasks in progress</span>
                                        <a href="#refresh"><i class="icon-repeat"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="header">
                                                <span class="title">iOS Development</span>
                                                <span class="percent"></span>
                                            </span>
                                            <div class="taskProgress progressSlim red">80</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="header">
                                                <span class="title">Android Development</span>
                                                <span class="percent"></span>
                                            </span>
                                            <div class="taskProgress progressSlim green">47</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="header">
                                                <span class="title">ARM Development</span>
                                                <span class="percent"></span>
                                            </span>
                                            <div class="taskProgress progressSlim yellow">32</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="header">
                                                <span class="title">ARM Development</span>
                                                <span class="percent"></span>
                                            </span>
                                            <div class="taskProgress progressSlim greenLight">63</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="header">
                                                <span class="title">ARM Development</span>
                                                <span class="percent"></span>
                                            </span>
                                            <div class="taskProgress progressSlim orange">80</div> 
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-menu-sub-footer">View all tasks</a>
                                    </li>	
                                </ul>
                            </li>
                            <!-- end: Notifications Dropdown -->
                            <!-- start: Message Dropdown -->
                            <li class="dropdown hidden-phone">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white envelope"></i>
                                </a>
                                <ul class="dropdown-menu messages">
                                    <li class="dropdown-menu-title">
                                        <span>You have 9 messages</span>
                                        <a href="#refresh"><i class="icon-repeat"></i></a>
                                    </li>	
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="../asset/admin/img/avatar.jpg" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Dennis Ji
                                                </span>
                                                <span class="time">
                                                    6 min
                                                </span>
                                            </span>
                                            <span class="message">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="../asset/admin/img/avatar.jpg" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Dennis Ji
                                                </span>
                                                <span class="time">
                                                    56 min
                                                </span>
                                            </span>
                                            <span class="message">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="../asset/admin/img/avatar.jpg" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Dennis Ji
                                                </span>
                                                <span class="time">
                                                    3 hours
                                                </span>
                                            </span>
                                            <span class="message">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="../asset/admin/img/avatar.jpg" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Dennis Ji
                                                </span>
                                                <span class="time">
                                                    yesterday
                                                </span>
                                            </span>
                                            <span class="message">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="../asset/admin/img/avatar.jpg" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Dennis Ji
                                                </span>
                                                <span class="time">
                                                    Jul 25, 2012
                                                </span>
                                            </span>
                                            <span class="message">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-menu-sub-footer">View all messages</a>
                                    </li>	
                                </ul>
                            </li>
                            <!-- end: Message Dropdown -->
                            <li>
                                <a class="btn" href="#">
                                    <i class="halflings-icon white wrench"></i>
                                </a>
                            </li>
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> <?php echo $_SESSION['name']; ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                    <li><a href="?logout=true"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="master.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Admin Home</span></a></li>	
                            <li><a href="add_student.php"><i class="icon-envelope"></i><span class="hidden-tablet"> Add Student Info</span></a></li>
                            <li><a href="manage_student.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Student Info</span></a></li>
                            
                            <li><a href="add_teacher.php"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Teacher Info</span></a></li>
                            <li><a href="manage_teacher.php"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Teacher Info</span></a></li>
                            <li><a href="assign_course_teacher.php"><i class="icon-edit"></i><span class="hidden-tablet"> Assign Course Teacher</span></a></li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Make Results</span><span class="label label-important"> 5 </span></a>
                                <ul>
                                    <li><a class="submenu" href="make_class1_result.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Class 1</span></a></li>
                                    <li><a class="submenu" href="make_class2_result.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Class 2</span></a></li>
                                    <li><a class="submenu" href="make_class3_result.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Class 3</span></a></li>
                                    <li><a class="submenu" href="make_class4_result.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Class 4</span></a></li>
                                    <li><a class="submenu" href="make_class5_result.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Class 5</span></a></li>
                                </ul>	
                            </li>
                            <li><a href="add_notice.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Add Notice</span></a></li>
                            <li><a href="manage_notice.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Manage Notice</span></a></li>
                            
                            
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">

                    <?php
                    if (isset($page)) {
                        if ($page == 'add_student_form.php') {
                            include './pages/add_student_form.php';
                        } else if ($page == 'manage_student_page.php') {
                            include './pages/manage_student_page.php';
                        } else if ($page == 'add_teacher_form.php') {
                            include './pages/add_teacher_form.php';
                        } else if ($page == 'manage_teacher_page.php') {
                            include './pages/manage_teacher_page.php';
                        } else if ($page == 'assign_course_teacher_page.php') {
                            include './pages/assign_course_teacher_page.php';
                        } else if ($page == 'class_schedule_page.php') {
                            include './pages/class_schedule_page.php';
                        } else if ($page == 'make_class1_result_page.php') {
                            include './pages/make_class1_result_page.php';
                        } else if ($page == 'make_class2_result_page.php') {
                            include './pages/make_class2_result_page.php';
                        } else if ($page == 'make_class3_result_page.php') {
                            include './pages/make_class3_result_page.php';
                        } else if ($page == 'make_class4_result_page.php') {
                            include './pages/make_class4_result_page.php';
                        } else if ($page == 'make_class5_result_page.php') {
                            include './pages/make_class5_result_page.php';
                        } else if ($page == 'add_notice_form.php') {
                            include './pages/add_notice_form.php';
                        } else if ($page == 'manage_notice_page.php') {
                            include './pages/manage_notice_page.php';
                        }
                    } else {
                        include './pages/dashboard.php';
                    }
                    ?>

                </div><!--/.fluid-container-->

                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">Ã—</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <footer>

            <p>
                <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

            </p>

        </footer>

        <!-- start: JavaScript-->

        <script src="../asset/admin/js/jquery-1.9.1.min.js"></script>
        <script src="../asset/admin/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="../asset/admin/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="../asset/admin/js/jquery.ui.touch-punch.js"></script>

        <script src="../asset/admin/js/modernizr.js"></script>

        <script src="../asset/admin/js/bootstrap.min.js"></script>

        <script src="../asset/admin/js/jquery.cookie.js"></script>

        <script src='../asset/admin/js/fullcalendar.min.js'></script>

        <script src='../asset/admin/js/jquery.dataTables.min.js'></script>

        <script src="../asset/admin/js/excanvas.js"></script>
        <script src="../asset/admin/js/jquery.flot.js"></script>
        <script src="../asset/admin/js/jquery.flot.pie.js"></script>
        <script src="../asset/admin/js/jquery.flot.stack.js"></script>
        <script src="../asset/admin/js/jquery.flot.resize.min.js"></script>

        <script src="../asset/admin/js/jquery.chosen.min.js"></script>

        <script src="../asset/admin/js/jquery.uniform.min.js"></script>

        <script src="../asset/admin/js/jquery.cleditor.min.js"></script>

        <script src="../asset/admin/js/jquery.noty.js"></script>

        <script src="../asset/admin/js/jquery.elfinder.min.js"></script>

        <script src="../asset/admin/js/jquery.raty.min.js"></script>

        <script src="../asset/admin/js/jquery.iphone.toggle.js"></script>

        <script src="../asset/admin/js/jquery.uploadify-3.1.min.js"></script>

        <script src="../asset/admin/js/jquery.gritter.min.js"></script>

        <script src="../asset/admin/js/jquery.imagesloaded.js"></script>

        <script src="../asset/admin/js/jquery.masonry.min.js"></script>

        <script src="../asset/admin/js/jquery.knob.modified.js"></script>

        <script src="../asset/admin/js/jquery.sparkline.min.js"></script>

        <script src="../asset/admin/js/counter.js"></script>

        <script src="../asset/admin/js/retina.js"></script>

        <script src="../asset/admin/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>
