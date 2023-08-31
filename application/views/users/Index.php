<?php $this->load->view("users/includes/HeadScripts"); ?>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="sk-folding-cube">
            <div class="sk-folding-cube-box">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- START POPUP -->
    <div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="padding_eight_all">
                                <div class="heading_s1">
                                    <h4>Login</h4>
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                <label class="form-check-label" for="exampleCheckbox1"><span>Remember
                                                        me</span></label>
                                            </div>
                                        </div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-block" name="login">Log
                                            in</button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                    <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                                </ul>
                                <div class="form-note text-center">Don't Have an Account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#SignUp">Sign up now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade lr_popup" id="SignUp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="padding_eight_all">
                                <div class="heading_s1">
                                    <h4>Sign Up</h4>
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                                <label class="form-check-label" for="exampleCheckbox3"><span>I agree to
                                                        terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-block" name="register">Register</button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                    <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                                </ul>
                                <div class="form-note text-center">Already have an account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#Login">Login Here!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END POPUP -->

    <!-- START HEADER -->
    <header class="header_wrap dark_skin fixed-top">
        <div class="top-header bg_dark light_skin">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <ul class="header_list text-center text-md-left">
                            <li><i class="far fa-clock"></i> <span id="current_time"></span></li>
                            <li><a href="#" data-toggle="modal" data-target="#SignUp">Sign Up</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="lng_dropdown mr-2">
                                <select name="countries" class="custome_select">
                                    <option value='en' data-title="English">English</option>
                                    <option value='fn' data-title="France">France</option>
                                    <option value='us' data-title="United States">United States</option>
                                </select>
                            </div>
                            <ul class="social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="assets/images/logo_white.png" alt="logo" />
                    <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link dropdown-toggle active" href="#">Home</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item active" href="index.html">Homepage
                                            1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Homepage 2</a>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Homepage 3</a>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Homepage 4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Pages</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="author-post.html">Author
                                            Post</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Page</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Features</a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-list.html">Blog List</a>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-grid.html">Blog Grid</a>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-masonry.html">Blog
                                            Masonry</a></li>
                                    <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Post Standard</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-standard-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-without-sidebar.html">Without Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Single Post</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">Right Sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-no-sidebar.html">Without Sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-slider.html">Slider Post</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-video.html">Video Post</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-audio.html">Audio Post</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">World</a>
                            <div class="dropdown-menu">
                                <ul class="post_nav_slider carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="20" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "480":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                    <li>
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/nav_blog_img1.jpg" alt="nav_blog_img1">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_text">
                                                    <div class="blog_tags">
                                                        <a class="blog_tags_cat bg_danger" href="#">Lifestyle</a>
                                                    </div>
                                                    <h6 class="blog_heading"><a href="#">This Thing Is Strong And Make
                                                            Your Job Good</a></h6>
                                                    <ul class="blog_meta">
                                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14,
                                                                    2018</span></a></li>
                                                        <li><a href="#"><i class="ti-comments"></i> <span>2</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/nav_blog_img2.jpg" alt="nav_blog_img2">
                                                    <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_text">
                                                    <div class="blog_tags">
                                                        <a class="blog_tags_cat bg_warning" href="#">Travel</a>
                                                    </div>
                                                    <h6 class="blog_heading"><a href="#">Nice Photo Shooting With Hand
                                                            Classic Style</a></h6>
                                                    <ul class="blog_meta">
                                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14,
                                                                    2018</span></a></li>
                                                        <li><a href="#"><i class="ti-comments"></i> <span>2</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/nav_blog_img3.jpg" alt="nav_blog_img3">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_text">
                                                    <div class="blog_tags">
                                                        <a class="blog_tags_cat bg_blue" href="#">fashion</a>
                                                    </div>
                                                    <h6 class="blog_heading"><a href="#">This Guitar Sound Is So Good
                                                            And I Need It More</a></h6>
                                                    <ul class="blog_meta">
                                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14,
                                                                    2018</span></a></li>
                                                        <li><a href="#"><i class="ti-comments"></i> <span>2</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/nav_blog_img4.jpg" alt="nav_blog_img4">
                                                    <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_text">
                                                    <div class="blog_tags">
                                                        <a class="blog_tags_cat bg_purple" href="#">Photography</a>
                                                    </div>
                                                    <h6 class="blog_heading"><a href="#">Otter Surfboards in Pacific
                                                            Ocean with friends</a></h6>
                                                    <ul class="blog_meta">
                                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14,
                                                                    2018</span></a></li>
                                                        <li><a href="#"><i class="ti-comments"></i> <span>2</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/nav_blog_img5.jpg" alt="nav_blog_img5">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_text">
                                                    <div class="blog_tags">
                                                        <a class="blog_tags_cat bg_success" href="#">Music</a>
                                                    </div>
                                                    <h6 class="blog_heading"><a href="#">Having Fun With DJ And The Best
                                                            Music Drop</a></h6>
                                                    <ul class="blog_meta">
                                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14,
                                                                    2018</span></a></li>
                                                        <li><a href="#"><i class="ti-comments"></i> <span>2</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="travel.html">Travel</a></li>
                        <li><a class="nav-link nav_item" href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- START HEADER -->

    <!-- START SECTION BANNER -->
    <div class="banner_section staggered-animation-wrap slide_medium">
        <div class="carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-items="1" data-dots="false" data-nav="true" data-smart-speed="1500">
            <div class="item active background_bg overlay_bg_60" data-img-src="assets/images/banner_post_img1.jpg">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-sm-12">
                                <div class="banner_content">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_warning" href="#">travel</a>
                                    </div>
                                    <h2 class="blog_heading"><a href="#">On the other hand we provide Inhence with
                                            righteous Career</a></h2>
                                    <ul class="blog_meta">
                                        <li>
                                            <a href="#">
                                                <i class="ti-calendar"></i>
                                                <span>April 14, 2018</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-comments"></i>
                                                <span>40 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="item background_bg overlay_bg_60" data-img-src="assets/images/banner_post_img2.jpg">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-sm-12">
                                <div class="banner_content">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_blue" href="#">Fashion</a>
                                    </div>
                                    <h2 class="blog_heading"><a href="#">A cheap and flexible solution for the starter
                                            package </a></h2>
                                    <ul class="blog_meta">
                                        <li>
                                            <a href="#">
                                                <i class="ti-calendar"></i>
                                                <span>April 14, 2018</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-comments"></i>
                                                <span>40 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="item background_bg overlay_bg_60" data-img-src="assets/images/banner_post_img3.jpg">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-sm-12">
                                <div class="banner_content">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_danger" href="#">Lifestyle</a>
                                    </div>
                                    <h2 class="blog_heading"><a href="#">The Sanford Stadium project consists of three
                                            main areas</a></h2>
                                    <ul class="blog_meta">
                                        <li>
                                            <a href="#">
                                                <i class="ti-calendar"></i>
                                                <span>April 14, 2018</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-comments"></i>
                                                <span>40 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- START BLOG SERVICES -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel_slider owl-carousel owl-theme nav_style4" data-margin="30" data-dots="false" data-nav="true" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "767":{"items": "3"}}'>
                        <div class="item">
                            <div class="service_box">
                                <a href="#">
                                    <img src="assets/images/service_img1.jpg" alt="service_img" />
                                    <span class="lable">Lifstyle</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service_box">
                                <a href="#">
                                    <img src="assets/images/service_img2.jpg" alt="service_img" />
                                    <span class="lable">Fashion</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service_box">
                                <a href="#">
                                    <img src="assets/images/service_img3.jpg" alt="service_img" />
                                    <span class="lable">Travelling</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service_box">
                                <a href="#">
                                    <img src="assets/images/service_img4.jpg" alt="service_img" />
                                    <span class="lable">Photography</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BLOG CATEGOREIS -->

    <!-- START NEWSLETTER SECTION -->
    <div class="section background_bg overlay_bg_70 overflow-hidden fixed_bg" data-img-src="assets/images/newsletters_bg.jpg">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="heading_s1 heading_light">
                        <h4>Subscribe Our Newsletter</h4>
                    </div>
                    <p class="text-white mb-md-0">Contrary to popular belief of lorem Ipsm Latin from consectetur
                        industry blandit massa enim varius nunc.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="newsletter_form input_tran_white">
                        <form>
                            <input type="text" required="" class="form-control form-control-sm rounded-input" placeholder="Your email address..">
                            <button type="submit" title="Subscribe" class="btn btn-default btn-radius btn-sm" name="submit" value="Submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NEWSLETTER SECTION -->

    <!-- START BLOG WITH SIDEBAR -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_article">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/blog_img1.jpg" alt="blog_img1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_blue" href="#">fashion</a>
                                    </div>
                                    <h5 class="blog_heading"><a href="#">The Master Of Human Happiness</a></h5>
                                    <ul class="blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                        <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                        making this generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/blog_img2.jpg" alt="blog_img2">
                                    <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_warning" href="#">Travel</a>
                                    </div>
                                    <h5 class="blog_heading"><a href="#">I Must Explain To This Mistaken</a></h5>
                                    <ul class="blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                        <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                        making this generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/blog_img3.jpg" alt="blog_img3">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_danger" href="#">Lifestyle</a>
                                    </div>
                                    <h5 class="blog_heading"><a href="#">There Anyone Who Loves Hims</a></h5>
                                    <ul class="blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                        <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                        making this generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/blog_img4.jpg" alt="blog_img4">
                                    <div class="post_video_icon"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_success" href="#">Music</a>
                                    </div>
                                    <h5 class="blog_heading"><a href="#">Which Toil And Pain Can Procure</a></h5>
                                    <ul class="blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                        <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                        making this generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/blog_img5.jpg" alt="blog_img5">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_purple" href="#">Photography</a>
                                    </div>
                                    <h5 class="blog_heading"><a href="#">Claims Of Duty Or The Obligations</a></h5>
                                    <ul class="blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                        <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                        making this generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/blog_img6.jpg" alt="blog_img6">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat bg_danger" href="#">Brand</a>
                                    </div>
                                    <h5 class="blog_heading"><a href="#">Every Pleasure Is To Be Welcomed</a></h5>
                                    <ul class="blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                        <li><a href="#"><i class="ti-comments"></i> <span>2 Comments</span></a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                        making this generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="linearicons-arrow-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="widget">
                            <h5 class="widget_title">About Me</h5>
                            <div class="about_widget">
                                <div class="about_img">
                                    <img src="assets/images/author_img.jpg" alt="author_img">
                                </div>
                                <h5>Alia Brock</h5>
                                <p>Lorem ipsum dolor sit amet elit adipiscing elit. Praesent id dolor dui dapibus
                                    gravida elit. Donec sit amet laoreet sagittis. </p>
                                <img src="assets/images/signature.png" alt="signature">
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Categories</h5>
                            <ul class="widget_categories">
                                <li><a href="#">
                                        <div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img1.jpg">
                                            <div class="post_category"><span class="cat_title">Business</span><span class="cat_num">2 Post</span></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img2.jpg">
                                            <div class="post_category"><span class="cat_title">Lifestyle</span><span class="cat_num">5 Post</span></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img3.jpg">
                                            <div class="post_category"><span class="cat_title">Travel</span><span class="cat_num">7 Post</span></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img4.jpg">
                                            <div class="post_category"><span class="cat_title">Fashion</span><span class="cat_num">4 Post</span></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="cat_bg background_bg overlay_bg_50" data-img-src="assets/images/cat_img5.jpg">
                                            <div class="post_category"><span class="cat_title">Beauty</span><span class="cat_num">8 Post</span></div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Social Feed</h5>
                            <ul class="widget_social social_icons rounded_social">
                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                                </li>
                                <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Letest Posts</h5>
                            <ul class="recent_post">
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img class="rounded-circle" src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Which Is The Saying From Toil And Pain</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img class="rounded-circle" src="assets/images/letest_post2.jpg" alt="letest_post2"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Certain And Owing To The Claims Of Duty</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img class="rounded-circle" src="assets/images/letest_post3.jpg" alt="letest_post3"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">These Matters To This Principle Of Selection</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="text-center">
                                <div class="ads_banner">
                                    <a href="#"><img src="assets/images/ads336X280.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BLOG WITH SIDEBAR -->

    <!-- START SECTION INSTAGRAM IMAGE -->
    <div class="section p-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="follow_box">
                        <h3><i class="ti-instagram"></i> instagram</h3>
                        <span>@morusblog</span>
                    </div>
                    <div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="0" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                        <div class="item">
                            <div class="instafeed_box">
                                <a href="#">
                                    <img src="assets/images/insta_img1.jpg" alt="insta_img1" />
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instafeed_box">
                                <a href="#">
                                    <img src="assets/images/insta_img2.jpg" alt="insta_img2" />
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instafeed_box">
                                <a href="#">
                                    <img src="assets/images/insta_img3.jpg" alt="insta_img3" />
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instafeed_box">
                                <a href="#">
                                    <img src="assets/images/insta_img4.jpg" alt="insta_img4" />
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instafeed_box">
                                <a href="#">
                                    <img src="assets/images/insta_img5.jpg" alt="insta_img5" />
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instafeed_box">
                                <a href="#">
                                    <img src="assets/images/insta_img6.jpg" alt="insta_img6" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION INSTAGRAM IMAGE -->

    <!-- START FOOTER SECTION -->
    <footer class="footer_dark bg_black">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-8 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="index-6.html"><img src="assets/images/logo_white.png" alt="logo"></a>
                            </div>
                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there isn't anything
                                embarrassing hidden in the middle of text</p>
                        </div>
                        <div class="widget">
                            <h6 class="widget_title">Popular Tag</h6>
                            <div class="tags">
                                <a href="#">General</a>
                                <a href="#">Design</a>
                                <a href="#">jQuery</a>
                                <a href="#">Branding</a>
                                <a href="#">Modern</a>
                                <a href="#">Blog</a>
                                <a href="#">Quotes</a>
                                <a href="#">Fashion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-5">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Support center</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Life Style</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-7">
                        <div class="widget">
                            <h6 class="widget_title">Recent Posts</h6>
                            <ul class="widget_recent_post">
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img class="rounded-circle" src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Which Is The Saying From Toil And Pain</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img class="rounded-circle" src="assets/images/letest_post2.jpg" alt="letest_post2"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Certain And Owing To The Claims Of Duty</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img class="rounded-circle" src="assets/images/letest_post3.jpg" alt="letest_post3"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">These Matters To This Principle Of Selection</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <h6 class="widget_title">Contact Info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, New South London , UK</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <ul class="widget_social social_icons rounded_social">
                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                                </li>
                                <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="copyright m-0 text-center">© 2020 All Rights Reserved By <a href="index.html" class="text_default">Morus.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    
    <?php $this->load->view("users/includes/FooterScripts"); ?>