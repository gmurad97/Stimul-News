<footer class="footer_dark bg_black">
    <div class="footer_top">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-start">
                <div class="col-xl-4 col-md-8 col-sm-12">
                    <div class="widget">

                        <?php if (!is_null($branding_data) && $branding_data->logo_light->visibility) : ?>
                            <div class="footer_logo">
                                <a href="<?= base_url('home'); ?>">
                                    <img src="<?= base_url('file_manager/branding/') . $branding_data->logo_light->file_name; ?>" width="200" alt="Logo">
                                </a>
                            </div>
                        <?php elseif (is_null($branding_data) || !$branding_data->logo_light->visibility) : ?>
                            <div class="footer_logo">
                                <a href="<?= base_url('home'); ?>">
                                    <img src="<?= base_url('public/user/assets/images/logo/logo_light.png'); ?>" width="200" alt="Logo">
                                </a>
                            </div>
                        <?php endif; ?>


                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Minus corporis odio, repellat provident culpa error, ducimus asperiores fugiat iste natus ullam rem ea quis officiis praesentium quam reiciendis cumque!
                            Asperiores, sit fuga.
                        </p>
                    </div>

                </div>
                <div class="col-xl-3 col-md-6 col-sm-7">
                    <div class="widget">
                        <h6 class="widget_title">Recent News</h6>
                        <ul class="widget_recent_post">
                            <?php if (!empty($news_recent_list) || !is_null($news_recent_list)) : ?>
                                <?php foreach ($news_recent_list as $news_item) : ?>
                                    <?php
                                    $news_title = json_decode($news_item["n_title"], TRUE);
                                    ?>
                                    <li>
                                        <div class="post_footer">
                                            <div class="post_img">
                                                <a href="#">
                                                    <img style="object-fit: cover;" class="rounded-circle" src="<?= base_url('file_manager/news/' . $news_item['n_preview_img']); ?>" alt="Latest News #1">
                                                </a>
                                            </div>
                                            <div class="post_content">
                                                <h6>
                                                    <a href="#"><?= htmlentities(base64_decode($news_title[$this->session->userdata("site_lang")])); ?></a>
                                                </h6>
                                                <p class="small m-0"><?= $news_item["n_created_date"]; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>



                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <a href="#"><?= htmlentities(base64_decode($contacts_data["information"]["address"]["info"])); ?></a>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com"><?= htmlentities(base64_decode($contacts_data["information"]["mail"]["info"])); ?></a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <a href="tel:+12345678901"><?= htmlentities(base64_decode($contacts_data["information"]["phone"]["info"])); ?></a>
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