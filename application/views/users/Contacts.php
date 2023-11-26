
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Templatemanja" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Morus is a very clean and modern Magazine / Blog Html Template. It's perfect for fast blogging, livestreams and classic blogs">
<meta name="keywords" content="	blog, clean, newspaper, personal blog, magazine, sport, travel, minimal, personal, elegant, lifestyle, post, blogger, blog template.">

<!-- SITE TITLE -->
<title>Morus - Personal Blog & Magazine HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/linearicons.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">

</head>

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
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="login">Log in</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Don't Have an Account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#SignUp">Sign up now</a></div>
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
                                            <label class="form-check-label" for="exampleCheckbox3"><span>I agree to terms &amp; Policy.</span></label>
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
                            <div class="form-note text-center">Already have an account? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#Login">Login Here!</a></div>
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
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Home</a>
                        <div class="dropdown-menu">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item" href="index.html">Homepage 1</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Homepage 2</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Homepage 3</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Homepage 4</a></li>
                            </ul>
                        </div>   
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Pages</a>
                        <div class="dropdown-menu">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item" href="about.html">About Us</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="author-post.html">Author Post</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Page</a></li>
                            </ul>
                        </div>
                    </li>  
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Features</a>
                        <div class="dropdown-menu dropdown-reverse">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item" href="blog-list.html">Blog List</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="blog-grid.html">Blog Grid</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="blog-masonry.html">Blog Masonry</a></li>
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
                                                <h6 class="blog_heading"><a href="#">This Thing Is Strong And Make Your Job Good</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
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
                                                <h6 class="blog_heading"><a href="#">Nice Photo Shooting With Hand Classic Style</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
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
                                                <h6 class="blog_heading"><a href="#">This Guitar Sound Is So Good And I Need It More</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
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
                                                <h6 class="blog_heading"><a href="#">Otter Surfboards in Pacific Ocean with friends</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
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
                                                <h6 class="blog_heading"><a href="#">Having Fun With DJ And The Best Music Drop</a></h6>
                                                <ul class="blog_meta">
                                                    <li><a href="#"><i class="ti-calendar"></i> <span>April 14, 2018</span></a></li>
                                                    <li><a href="#"><i class="ti-comments"></i> <span>2</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> 
                    <li><a class="nav-link nav_item" href="travel.html">Travel</a></li> 
                    <li><a class="nav-link nav_item active" href="contact.html">Contact</a></li>
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

<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="assets/images/contact_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
            		<h1>Contact Us</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB --> 

<!-- START CONTACT -->
<div class="section pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="contact_text">
                        <span>Address</span>
                        <p>123 Street, Old Trafford, London, UK</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                          <i class="ti-mobile"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        <p>+ 457 789 789 65</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-email"></i>
                    </div>
                    <div class="contact_text">
                        <span>Email Address</span>
                        <a href="mailto:info@sitename.com">info@yourmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT -->

<!-- START SECTION MAP -->
<div class="section p-0">
	<div class="container-fluid p-0">
    	<div class="row no-gutters">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION MAP -->

<!-- START CONTACT -->
<div class="section">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-9">
            	<div class="heading_s1 text-center">
                	<h2>Get In touch</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
            	<div class="field_form">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-md-6">
                            	<label>Name<span class="required">*</span></label>
                                <input required="" placeholder="Enter Name" id="first-name" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-md-6">
                            	<label>Email<span class="required">*</span></label>
                                <input required="" placeholder="Enter Email" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Phone<span class="required">*</span></label>
                                <input required="" placeholder="Enter Phone No" id="phone" class="form-control" name="phone" type="text">
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Subject</label>
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text">
                            </div>
                            <div class="form-group col-md-12">
                            	<label>Message<span class="required">*</span></label>
                                <textarea required="" placeholder="Enter Message" id="description" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START CONTACT -->

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
                                <img src="assets/images/insta_img1.jpg" alt="insta_img1"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img2.jpg" alt="insta_img2"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img3.jpg" alt="insta_img3"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img4.jpg" alt="insta_img4"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img5.jpg" alt="insta_img5"/>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                        	<a href="#">
                                <img src="assets/images/insta_img6.jpg" alt="insta_img6"/>
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
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
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
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a></li>
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

<!-- Latest jQuery --> 
<script src="assets/js/jquery-1.12.4.min.js"></script> 
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="assets/js/isotope.min.js"></script>
<!-- jquery.appear js  -->
<script src="assets/js/jquery.appear.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="assets/js/jquery.parallax-scroll.js"></script>
<!-- jquery.dd.min Js -->
<script src="assets/js/jquery.dd.min.js"></script>
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>

</body>
</html>