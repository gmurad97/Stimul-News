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
                        <?php endif; ?>
                        <?php
                        $about_short = json_decode($about_data["a_short"], TRUE);
                        $about_copyright = json_decode($about_data["a_copyright"], TRUE);
                        ?>
                        <p>
                            <?= htmlentities(base64_decode($about_short[$this->session->userdata("site_lang")])); ?>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-7">
                    <div class="widget">
                        <h6 class="widget_title"><?= $this->lang->line("recent_news"); ?></h6>
                        <ul class="widget_recent_post">
                            <?php if (!empty($news_recent_three) || !is_null($news_recent_three)) : ?>
                                <?php foreach ($news_recent_three as $news_item) : ?>
                                    <?php
                                    $news_title = json_decode($news_item["n_title"], TRUE);
                                    ?>
                                    <li>
                                        <div class="post_footer">
                                            <div class="post_img">
                                                <a href="<?= base_url('news-single/' . $news_item['n_uid']); ?>">
                                                    <img style="width:70px;height:70px;object-fit: cover;" class="rounded-circle" src="<?= base_url('file_manager/news/' . $news_item['n_preview_img']); ?>" alt="Latest News #1">
                                                </a>
                                            </div>
                                            <div class="post_content">
                                                <h6>
                                                    <a href="<?= base_url('news-single/' . $news_item['n_uid']); ?>"><?= htmlentities(base64_decode($news_title[$this->session->userdata("site_lang")])); ?></a>
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
                        <h6 class="widget_title"><?= $this->lang->line("contact_info"); ?></h6>
                        <ul class="contact_info contact_info_light">
                            <?php if (!is_null($contacts_data)) : ?>
                                <?php if ($contacts_data->information->address->status) :  ?>
                                    <li>
                                        <i class="ti-location-pin"></i>
                                        <a target="_blank" href="https://maps.google.com/?q=<?= htmlentities(base64_decode($contacts_data->information->address->info)); ?>"><?= htmlentities(base64_decode($contacts_data->information->address->info)); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->information->mail->status) :  ?>
                                    <li>
                                        <i class="ti-email"></i>
                                        <a href="mailto:<?= htmlentities(base64_decode($contacts_data->information->mail->info)); ?>"><?= htmlentities(base64_decode($contacts_data->information->mail->info)); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->information->phone->status) :  ?>
                                    <li>
                                        <i class="ti-mobile"></i>
                                        <a href="tel:<?= htmlentities(base64_decode($contacts_data->information->phone->info)); ?>"><?= htmlentities(base64_decode($contacts_data->information->phone->info)); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="widget">
                        <ul class="widget_social social_icons rounded_social">
                            <?php if (!is_null($contacts_data)) : ?>
                                <?php if ($contacts_data->social->facebook->status) : ?>
                                    <li>
                                        <a target="_blank" href="<?= htmlentities(base64_decode($contacts_data->social->facebook->link)); ?>" class="sc_facebook">
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->social->twitter->status) : ?>
                                    <li>
                                        <a target="_blank" href="<?= htmlentities(base64_decode($contacts_data->social->twitter->link)); ?>" class="sc_twitter">
                                            <i class="ion-social-twitter"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->social->google_plus->status) : ?>
                                    <li>
                                        <a target="_blank" href="<?= htmlentities(base64_decode($contacts_data->social->google_plus->link)); ?>" class="sc_gplus">
                                            <i class="ion-social-googleplus"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->social->youtube->status) : ?>
                                    <li>
                                        <a target="_blank" href="<?= htmlentities(base64_decode($contacts_data->social->youtube->link)); ?>" class="sc_youtube">
                                            <i class="ion-social-youtube-outline"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->social->instagram->status) : ?>
                                    <li>
                                        <a target="_blank" href="<?= htmlentities(base64_decode($contacts_data->social->instagram->link)); ?>" class="sc_instagram">
                                            <i class="ion-social-instagram-outline"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($contacts_data->social->pinterest->status) : ?>
                                    <li>
                                        <a target="_blank" href="<?= htmlentities(base64_decode($contacts_data->social->pinterest->link)); ?>" class="sc_pinterest">
                                            <i class="ion-social-pinterest-outline"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
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
                        <?= htmlentities(base64_decode($about_copyright[$this->session->userdata("site_lang")])); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="javascript:void(0);" class="scrollup" style="display: none;">
    <i class="ion-ios-arrow-up"></i>
</a>