<!DOCTYPE HTML>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<php>
    <head>
        <title>Chopinagar Primary School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
        <meta name="keywords" content="Chopinagar Primary School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
        <!----- start-header---->
        <div id="home" class="header">
            <div class="top-header">
                <div class="container">
                    <div class="logo" align="left">
                        <img src="asset/frontend/images/logo.png" class="" alt="" /> 
                        <a><h1 style="width: 1141px; height: 90px; margin-left: 15px;"> Chopinagar Primary School</h1></a>

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
            <!--- banner Slider starts Here --->
            <script src="asset/frontend/js/responsiveslides.min.js"></script>
            <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: false,
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
            <!-- Slideshow 4 -->

             <div  id="top" class="callbacks_container">
    <ul class="rslides" id="slider4">
        <li>
            <div class="slider-top">
                <h2>Knowledge is Power</h2>
                <p>Knowledge is power. You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it  You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it..</p>
                <h6>Welcoming for every Child</h6>
            </div>
        </li>
        <li>
            <div class="slider-top">
                <h2>Perfect Education</h2>
                <p>Knowledge is power. You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it  You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it..</p>
                <h6>Welcoming for every Child</h6>
            </div>
        </li>
        <li>
            <div class="slider-top">
                <h2>School Education</h2>
                <p>Knowledge is power. You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it  You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it..</p>
                <h6>Welcoming for every Child</h6>
            </div>
        </li>
        <li>
            <div class="slider-top">
                <h2>Perfect Education</h2>
                <p>Knowledge is power. You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it  You can't begin a career, for that matter even a relationship, unless you know everything there is to know about it..</p>
                <h6>Welcoming for every Child</h6>
            </div>
        </li>
    </ul>
</div>
<div class="clearfix"> </div>
</div>
<!----- //End-slider---->

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
<!--services-->
<div class="service-section">
    <div class="col-md-7 service-section-grids">
        <div class="container">
            <div class="serve-head">
                <h3>Our Activities</h3>
                <h6>Our Bestservices for your Kids</h6>
            </div>
        </div>
        <div class="service-grid">
            <div class="service-section-grid">
                <div class="icon">
                    <i class="book"> </i>
                </div>
                <div class="icon-text">
                    <h4>BOOKS STATIONARY</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="service-section-grid">
                <div class="icon">
                    <i class="pencil"> </i>
                </div>
                <div class="icon-text">
                    <h4>BOOKS STATIONARY</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="service-section-grid">
                <div class="icon">
                    <i class="award"> </i>
                </div>
                <div class="icon-text">
                    <h4>Lorem Ipsum dolor</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-5 service-text">
        <p></p>
    </div>
    <div class="clearfix"> </div>
</div>

<!----start-slide-bottom--->

<!--/services-->
<div class="news-section">
    <div class="container">
        <div class="news-head">
            <h3>Current News</h3>
            <p>Follow our Most Important News</p>
        </div>
        <div class="news">
            <div class="col-md-4 test-right01 test1">
                <img src="asset/frontend/images/n1.jpg" class="img-responsive" alt="" />
                <div class="textbox textbox1">
                    <h4 class="col-md-4 date">14<br> <span>Jun</span><br><lable>0 <img src="asset/frontend/images/comment.png" class="img-responsive" alt="" /></lable></h4>
                    <p class="col-md-8 news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit...</p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 test-right01 test1">
                <img src="asset/frontend/images/n2.jpg" class="img-responsive" alt="" />
                <div class="textbox textbox1">
                    <h4 class="col-md-4 date">15<br> <span>July</span><br><lable>0 <img src="asset/frontend/images/comment.png" class="img-responsive" alt="" /></lable></h4>
                    <p class="col-md-8 news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit...</p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 test-right01 test1">
                <img src="asset/frontend/images/n3.jpg" class="img-responsive" alt="" />
                <div class="textbox textbox1">
                    <h4 class="col-md-4 date">30<br> <span>Agu</span><br><lable>0 <img src="asset/frontend/images/comment.png" class="img-responsive" alt="" /></lable></h4>
                    <p class="col-md-8 news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit...</p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="culture-section">
    <div class="container">
        <div class="culture-head">
            <h3>Our Events</h3>
            <p>Don'T Miss our Events</p>
        </div>
        <div class="culture">
            <div class="col-md-6 culture-grids">
                <a href="single.php"> <img src="asset/frontend/images/event1.jpg" class="img-responsive" alt="" /></a>
                <div class="e_date">
                    <h4>15<br> <span>July</span></h4>
                </div>
                <a href="single.php"><h5>ART SESSION</h5></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-md-6 culture-grids">
                <a href="single.php"> <img src="asset/frontend/images/event2.jpg" class="img-responsive" alt="" /></a>
                <div class="e_date">
                    <h4>15<br> <span>July</span></h4>
                </div>
                <a href="single.php"><h5>ART SESSION</h5></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>
            <div class="col-md-6 culture-grids">
                <a href="single.php"> <img src="asset/frontend/images/event3.jpg" class="img-responsive" alt="" /></a>
                <div class="e_date">
                    <h4>15<br> <span>July</span></h4>
                </div>
                <a href="single.php"><h5>ART SESSION</h5></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-md-6 culture-grids">
                <a href="single.php"> <img src="asset/frontend/images/event4.jpg" class="img-responsive" alt="" /></a>
                <div class="e_date">
                    <h4>15<br> <span>July</span></h4>
                </div>
                <a href="single.php"><h5>ART SESSION</h5></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
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
                        <p>&copy; 2015 All Rights Reserved Design by <a href="#">Ashiq</a> </p>
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