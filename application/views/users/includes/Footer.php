<footer class="footer_dark bg_black">
    <div class="footer_top">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-start">
                <div class="col-xl-4 col-md-8 col-sm-12">
                    <div class="widget">

                        <?php if (!is_null($branding_options->logo_light->file_name) && $branding_options->logo_light->visibility) : ?>
                            <div class="footer_logo">
                                <a href="<?= base_url('home'); ?>">
                                    <img src="<?= base_url('file_manager/branding/').$branding_options->logo_light->file_name; ?>" width="200" alt="Logo">
                                </a>
                            </div>
                        <?php endif; ?>


                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Minus corporis odio, repellat provident culpa error, ducimus asperiores fugiat iste natus ullam rem ea quis officiis praesentium quam reiciendis cumque!
                            Asperiores, sit fuga.
                        </p>
                    </div>
                    <div class="widget">
                        <h6 class="widget_title">Popular categories</h6>
                        <div class="tags">
                            <a href="#">Categori1</a>
                            <a href="#">Categori2</a>
                            <a href="#">Categori3</a>
                            <a href="#">Categori4</a>
                            <a href="#">Categori5</a>
                            <a href="#">Categori6</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-7">
                    <div class="widget">
                        <h6 class="widget_title">Recent News</h6>
                        <ul class="widget_recent_post">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#">
                                            <img class="rounded-circle" src="<?= base_url('public/user/assets/images/letest_post1.jpg'); ?>" alt="Latest News #1">
                                        </a>
                                    </div>
                                    <div class="post_content">
                                        <h6>
                                            <a href="#">Which Is The Saying From Toil And Pain</a>
                                        </h6>
                                        <p class="small m-0">01.01.1970</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#">
                                            <img class="rounded-circle" src="<?= base_url('public/user/assets/images/letest_post2.jpg'); ?>" alt="Latest News #2">
                                        </a>
                                    </div>
                                    <div class="post_content">
                                        <h6>
                                            <a href="#">Which Is The Saying From Toil And Pain</a>
                                        </h6>
                                        <p class="small m-0">01.01.1970</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#">
                                            <img class="rounded-circle" src="<?= base_url('public/user/assets/images/letest_post3.jpg'); ?>" alt="Latest News #3">
                                        </a>
                                    </div>
                                    <div class="post_content">
                                        <h6>
                                            <a href="#">Which Is The Saying From Toil And Pain</a>
                                        </h6>
                                        <p class="small m-0">01.01.1970</p>
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
                                <a href="#">Azerbaijan Baku, Caspian Plaza</a>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <a href="tel:+12345678901">+ 123 456 789 01</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <ul class="widget_social social_icons rounded_social">
                            <li>
                                <a href="#" class="sc_facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sc_twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sc_gplus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sc_youtube">
                                    <i class="ion-social-youtube-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sc_instagram">
                                    <i class="ion-social-instagram-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sc_pinterest">
                                    <i class="ion-social-pinterest-outline"></i>
                                </a>
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
                    <p class="copyright m-0 text-center">
                        © 2023 All Rights Reserved By <a href="#" class="text_default">GMurad97</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="javascript:void(0);" class="scrollup" style="display: none;">
    <i class="ion-ios-arrow-up"></i>
</a>