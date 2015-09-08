
<!DOCTYPE HTML>
<php>
    <head>
        <title>Chopinagar Primary School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
        <meta name="keywords" content="Primary School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="asset/frontend/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="asset/frontend/css/style.css" rel='stylesheet' type='text/css' />	
        <script src="asset/frontend/js/jquery.min.js"></script>
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
    </head>
    <body>
        <!--start-home-->
        <!----- start-header---->
        <div id="home" class="header two">
            <div class="top-header two">	
                <div class="container">
                    <div class="logo">
                        <img src="asset/frontend/images/logo.png" class="" alt="" />
                        <a href="index.php"><h1 style="width: 1141px; height: 90px; margin-left: 15px;"> Chopinagar Primary School</h1></a>
                    </div>
                    <div class="top-menu">
                        <span class="menu"> </span>
                        <ul class="cl-effect-16">
                            <li><a class="active" href="index.php" data-hover="Home">Home</a></li>
                            <li><a href="about.php" data-hover="About">About</a></li>
                            <!--<li><a href="student.php" data-hover="Student">Student</a></li>-->
                            <li><a href="teachers.php" data-hover="Teachers">Teachers</a></li>
                            <!--<li><a href="parents.php" data-hover="Parents">Parents</a></li>-->
                            <li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>
                            <li><a href="event.php" data-hover="Event">Event</a></li>
                            <li><a href="news.php" data-hover="News">News</a></li>
                            <li><a href="contact.php" data-hover="Contact">Contact</a></li>
                            <!--<li><a href="registration.php" data-hover="Registration">Registration</a></li>-->
                            
                            <li><a href="admin/index.php" data-hover="Admin Login">Admin Login</a></li>
                            
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <!-- script-for-menu -->
                    <script>
                        $("span.menu").click(function () {
                            $(".top-menu ul").slideToggle("slow", function () {
                            });
                        });
                    </script>
                    <!-- script-for-menu -->
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!----- //End-slider---->
        <!---start-slide-bottom--->
        <div class="about-section">
            <div class="container">
                <div class="about-head">
                    <h3>About Us</h3>
                    <p>A Few words about us</p>
                </div>
                <div class="col-md-5 slide-about">
                    <div class="side">
                        <div  id="top" class="callbacks_container">
                            <ul class="rslides" id="slider4">
                                <li>
                                    <img src="asset/frontend/images/s1.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img src="asset/frontend/images/s2.jpg" class="img-responsive" alt="" />
                                </li>
                                <li>
                                    <img src="asset/frontend/images/s1.jpg" class="img-responsive" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script src="asset/frontend/js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: false,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <!----//End-slider-script---->
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-7 about-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis ac, gravida quis tortor. Suspendisse non urna mi, quis tincidunt eros. Nullam tellus turpis, fringilla sit amet congue ut, luctus a nulla. Donec sit amet sapien neque, id ullamcorper diam. Nulla facilisi. Pellentesque pellentesque arcu a elit congue lacinia.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis ac, gravida quis tortor. Suspendisse non urna mi, quis tincidunt eros. Nullam tellus turpis, fringilla sit amet congue ut, luctus a nulla. Donec sit amet sapien neque, id ullamcorper diam. Nulla facilisi. Pellentesque pellentesque arcu a elit congue lacinia.</p>
                    <span>Nullam tellus turpis, fringilla sit amet congue ut, luctus a nulla. Donec sit amet sapien neque, id ullamcorper diam. Nulla facilisi. Pellentesque pellentesque arcu a elit congue lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis ac, gravida quis tortor. Suspendisse non urna mi, quis tincidunt eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!---start-about-bottom--->
        <div class="slide-bottom">
            <div class="slide-bottom-grids">
                <div class="container">
                    <div class="col-md-6 slide-bottom-grid">
                        <h3>Welcome!</h3>
                        <p>Ruelloribus eget elemetum vel curleif end elit. for that matter even a relationship, for that matter even a relationship, Aean auctoetnliir pis terios. ante ipsummis fauulet utrice posere cubtsed leo pharetu nec augue. dui bibendum ornare elementum. In vel mi pellentesque.</p>
                    </div>
                    <div class="col-md-6 slide-bottom-grid">
                        <h3>Our Mission</h3>
                        <p>Ruelloribus eget elemetum vel curleif end elit. for that matter even a relationship, for that matter even a relationship, Aean auctoetnliir pis terios. ante ipsummis fauulet utrice posere cubtsed leo pharetu nec augue. dui bibendum ornare elementum. In vel mi pellentesque.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="member-section">
            <div class="container">
                <div class="member-head">
                    <h3>Our Members</h3>
                    <p>2015 Board Members</p>
                </div>
                <div class="members">
                    <div class="col-md-4 member-grids">
                        <a href="#"> <img src="asset/frontend/images/m2.jpg" class="img-responsive" alt="" /></a>
                        <h5>President</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-md-4 member-grids">
                        <a href="#"> <img src="asset/frontend/images/m3.jpg" class="img-responsive" alt="" /></a>
                        <h5>Vice President</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    </div>
                    <div class="col-md-4 member-grids">
                        <a href="#"> <img src="asset/frontend/images/m1.jpg" class="img-responsive" alt="" /></a>
                        <h5>Chief of Staff</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--/mid-bg-->
    <div class="mid-bg">
        <div class="container">
            <div class="mid-section">
                <h3>First Day at School!</h3>
                <h4>ARE YOU READY ?</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text  and typesetting industry. Lorem Ipsum has been the industry's standard dummy  ever since the 1500s,</p>
            </div>
        </div>
    </div>
    <!--address-->
    <div id="contact" class="address">
        <div class="col-md-7 address-left">
            <div class="products">
                <h3>Classes</h3>
                <ul>
                    <li><a href="event.php">Sports</a></li>
                    <li><a href="event.php">Music</a></li>
                    <li><a href="event.php">Dance</a></li>
                </ul>
            </div>
            <div class="company-adout">
                <h3>Learn</h3>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="teachers.php">Teacher</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <p>Creativity itself doesn't care at all about results - the only thing it craves is the process. 
                Learn to love the process and let whatever happens next happen,<span>
                    without fussing too much about it</span></p>
        </div>
        <div class="col-md-5 address-right">
            <h3>Our Offices</h3>
            <p>Chopinagar, Kamarpara, Shahjahanpur, Bogra-5801</p>
            <p>01723-658820</p>
            <ul class="bottom">
                <li>Chopinagar, Shahjahanpur, Bogra-5801</li>
                <li>01723-658820</li>
            </ul>
            <ul>
                <li>Chopinagar, Shahjahanpur, Bogra-5801</li>
                <li>01723-658820</li>
                <li><a class="mail" href="mailto:cphs@gmail.com">cphs@gmail.com</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--//address-->
    <!----footer--->
    <div class="footer">
        <div class="container">
            <div class="copy">
                <p>&copy; 2015 All Rights Reserved Design by <a href="@shiq">Ashiq</a> </p>
            </div>

        </div>
    </div>
    <!--start-smoth-scrolling-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('php,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear' 
             };
             */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</php>