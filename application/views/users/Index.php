<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/HeaderSlider"); ?>
<div class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_s2">
                    <h4><?= $this->lang->line("all_categories"); ?></h4>
                </div>
                <div class="carousel_slider owl-carousel owl-theme nav_style4" data-margin="20" data-smart-speed="1024" data-dots="false" data-nav="true" data-loop="true" data-autoplay="true" data-autoplay-timeout="3072" data-autoplay-hover-pause="true" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "767":{"items": "3"}}'>
                    <?php if (!empty($categories_list) || !is_null($$categories_list)) : ?>
                        <?php foreach ($categories_list as $category_item) : ?>
                            <?php if ($category_item["c_status"]) : ?>
                                <?php $category_name = json_decode($category_item["c_name"], TRUE); ?>
                                <div class="item">
                                    <div class="service_box">
                                        <a href="#">
                                            <img src="<?= base_url('file_manager/categories/') . $category_item["c_img"]; ?>" alt="<?= htmlentities(base64_decode($category_name[$this->session->userdata("site_lang")])); ?>">
                                            <span class="lable"><?= htmlentities(base64_decode($category_name[$this->session->userdata("site_lang")])); ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section tranding_post pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_s2">
                    <h4><?= $this->lang->line("last_news"); ?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($news_last_list) || !is_null($news_last_list)) : ?>
                <?php foreach ($news_last_list as $news_item) : ?>
                    <?php
                    $news_category_name = json_decode($news_item["c_name"], TRUE);
                    $news_title = json_decode($news_item["n_title"], TRUE);
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_post blog_grid_overlay">
                            <div class="blog_img">
                                <a href="javascript:void(0);">
                                    <img width="370" height="550" style="object-fit: cover;" src="<?= base_url('file_manager/news/' . $news_item['n_preview_img']); ?>" alt="<?= htmlentities(base64_decode($news_title[$this->session->userdata('site_lang')])); ?>">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="blog_tags">
                                        <a class="blog_tags_cat" style="background-color: <?= $news_item['c_bg_color']; ?>;" href="#"><?= htmlentities(base64_decode($news_category_name[$this->session->userdata("site_lang")])); ?></a>
                                    </div>
                                    <h5 class="blog_heading">
                                        <a href="#">
                                            <?= htmlentities(base64_decode($news_title[$this->session->userdata('site_lang')])); ?>
                                        </a>
                                    </h5>
                                    <ul class="blog_meta">
                                        <li>
                                            <a href="#">
                                                <i class="far fa-calendar-alt"></i>
                                                <span><?= $news_item["n_created_date"]; ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if (!empty($categories_list) || !is_null($categories_list)) : ?>
    <?php $random_categories = array_intersect_key($categories_list, array_flip(array_rand($categories_list, count($categories_list) >= 3 ? 3 : count($categories_list)))); ?>
    <?php foreach ($random_categories as $category_item) : ?>
        <?php $category_item_name = json_decode($category_item["c_name"], TRUE); ?>
        <div class="section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_s2">
                            <h4><?= htmlentities(base64_decode($category_item_name[$this->session->userdata("site_lang")])); ?> - <?= $this->lang->line("latest_news"); ?></h4>
                        </div>
                        <div class="carousel_slider owl-carousel owl-theme nav_style1" data-margin="15" data-loop="true" data-dots="false" data-nav="true" data-responsive='{"0":{"items": "1"}, "480":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                            <?php
                            $filtered_news = array_filter($news_list, function ($news_item) use ($category_item) {
                                return $news_item["n_category_uid"] == $category_item["c_uid"] ? $news_item : NULL;
                            });
                            ?>
                            <?php foreach ($filtered_news as $filtered_news_item) : ?>
                                <?php
                                $filtered_news_item_title = json_decode($filtered_news_item["n_title"], TRUE);
                                $filtered_news_item_category_name = json_decode($filtered_news_item["c_name"], TRUE);
                                ?>
                                <div class="item">
                                    <div class="blog_post blog_grid_overlay">
                                        <div class="blog_img">
                                            <a href="#">
                                                <img height="384" style="object-fit: cover;" src="<?= base_url('file_manager/news/' . $filtered_news_item['n_preview_img']); ?>" alt="<?= htmlentities(base64_decode($filtered_news_item_title[$this->session->userdata('site_lang')])); ?>">
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_text">
                                                <div class="blog_tags">
                                                    <a class="blog_tags_cat" style="background-color: <?= $filtered_news_item['c_bg_color']; ?>;" href="#">
                                                        <?= htmlentities(base64_decode($filtered_news_item_category_name[$this->session->userdata("site_lang")])); ?>
                                                    </a>
                                                </div>
                                                <h5 class="blog_heading">
                                                    <a href="#">
                                                        <?= htmlentities(base64_decode($filtered_news_item_title[$this->session->userdata("site_lang")])); ?>
                                                    </a>
                                                </h5>
                                                <ul class="blog_meta">
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-calendar-alt"></i>
                                                            <span><?= $filtered_news_item["n_created_date"]; ?></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading_s2">
                    <h4><?= $this->lang->line("our_partners"); ?></h4>
                </div>
                <div class="client_logo carousel_slider owl-carousel owl-theme" data-margin="15" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-timeout="2048" data-autoplay-hover-pause="true" data-smart-speed="1024" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                    <?php if (!empty($partners_list) || !is_null($partners_list)) : ?>
                        <?php foreach ($partners_list as $partners_item) : ?>
                            <?php if ($partners_item['p_status']) : ?>
                                <div class="item">
                                    <div class="instafeed_box">
                                        <a title="<?= $partners_item['p_title']; ?>" href="<?= $partners_item['p_link']; ?>">
                                            <img height="128" src="<?= base_url('file_manager/partners/' . $partners_item['p_img']); ?>" alt="<?= $partners_item['p_title']; ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>