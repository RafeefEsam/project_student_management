<?php
session_start();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Managment System</title>
    <meta charset="UTF-8">
    <meta name="description" content="WebUni Education Template">
    <meta name="keywords" content="webuni, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="public/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->


    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/owl.carousel.css')}}" rel="stylesheet">



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="public/img/logo.png" alt="">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
              <!--  <a href="{{route('register')}}" class="site-btn header-btn" >Register</a>  -->
                <a href="{{url('loginpage')}}" class="site-btn header-btn" style="margin-right:10px">Login</a>

                <nav class="main-menu">
                    <ul>
                        <li><a href="?">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="public/img/bg.jpg">
    <div class="container">
        <div class="hero-text text-white">
            <h2>Get The Best Free Online Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2>Our Course Categories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="public/img/categories/1.jpg"></div>
                    <div class="ci-text">
                        <h5>IT Development</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>120 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="public/img/categories/2.jpg"></div>
                    <div class="ci-text">
                        <h5>Web Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>70 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="public/img/categories/3.jpg"></div>
                    <div class="ci-text">
                        <h5>Illustration & Drawing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>55 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="public/img/categories/4.jpg"></div>
                    <div class="ci-text">
                        <h5>Social Media</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>40 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="public/img/categories/5.jpg"></div>
                    <div class="ci-text">
                        <h5>Photoshop</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>220 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="public/img/categories/6.jpg"></div>
                    <div class="ci-text">
                        <h5>Cryptocurrencies</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>25 Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories section end -->

<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-0">
            <h2>Featured Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all">All</li>
            <li class="control" data-filter=".finance">Finance</li>
            <li class="control" data-filter=".design">Design</li>
            <li class="control" data-filter=".web">Web Development</li>
            <li class="control" data-filter=".photo">Photography</li>
        </ul>
        <div class="row course-items-area">
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/1.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>Art & Crafts</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/1.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/2.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/2.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/3.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>Graphic Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/3.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/4.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/4.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/5.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/5.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/6.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>Socia Media</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/6.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/7.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/7.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="public/img/courses/8.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>HTML 5</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="public/img/authors/8.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course section end -->





<!-- banner section -->
<section class="banner-section spad">
    <div class="container">
        <div class="section-title mb-0 pb-2">
            <h2>Join Our Community Now!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="text-center pt-5">
            <a href="{{route('register')}}" class="site-btn">Register Now</a>
        </div>
    </div>
</section>
<!-- banner section end -->


<!-- footer section -->
<footer class="footer-section spad pb-0">
    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">
                <div class="widget-item">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>1481 Creekside Lane <br>Avila Beach, CA 931</li>
                        <li>+53 345 7953 32453</li>
                        <li>yourmail@gmail.com</li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Engeneering</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Graphic Design</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Development</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Newsletter</h4>
                    <form class="footer-newslatter">
                        <input type="email" placeholder="E-mail">
                        <button class="site-btn">Subscribe</button>
                        <p>*We don’t spam</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-warp">
            <ul class="footer-menu">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
            {{--            <div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>--}}
        </div>
    </div>
</footer>
<!-- footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('public/js/jquery-3.2.1.min.js') }}" defer></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('public/js/mixitup.min.js') }}" defer></script>
<script src="{{ asset('public/js/circle-progress.min.js') }}" defer></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('public/js/main.js') }}" defer></script>


</html>
