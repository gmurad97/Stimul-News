<!-- START HEADER -->
<header class="header_wrap dark_skin fixed-top">
    <div class="top-header bg_dark light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="header_list text-center text-md-left">
                        <li><i class="far fa-clock"></i> <span id="current_time"></span></li>
                        <li><i class="fas fa-cloud-sun-rain"></i> <span>C:32*</span></li>
                        <li><span>F:86*</span></li>
                        <li><a href="#" data-toggle="modal" data-target="#SignUp">Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="lng_dropdown mr-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-title="English">eng</option>
                                <option value='fn' data-title="France">aze</option>
                                <option value='us' data-title="United States">rus</option>
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
                <img class="logo_light" src="<?php echo base_url('public/user/assets/images/logo_white.png'); ?>" alt="logo" />
                <img class="logo_dark" src="<?php echo base_url('public/user/assets/images/logo_dark.png'); ?>" alt="logo" />
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
                                                <img src="<?php echo base_url('public/user/assets/images/nav_blog_img1.jpg'); ?>" alt="nav_blog_img1">
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
                                                <img src="<?php echo base_url('public/user/assets/images/nav_blog_img2.jpg'); ?>" alt="nav_blog_img2">
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
                                                <img src="<?php echo base_url('public/user/assets/images/nav_blog_img3.jpg'); ?>" alt="nav_blog_img3">
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
                                                <img src="<?php echo base_url('public/user/assets/images/nav_blog_img4.jpg'); ?>" alt="nav_blog_img4">
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
                                                <img src="<?php echo base_url('public/user/assets/images/nav_blog_img5.jpg'); ?>" alt="nav_blog_img5">
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