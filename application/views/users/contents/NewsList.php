<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_list list_post">
                    <?php foreach ($news_list as $news_item) : ?>
                        <?php
                        $news_item_title = json_decode($news_item["n_title"], TRUE);
                        $news_item_short = json_decode($news_item["n_short"], TRUE);
                        $news_item_category = json_decode($news_item["c_name"], TRUE);
                        ?>
                        <div class="blog_post d-flex flex-row align-items-center">
                            <div class="col-lg-6">
                                <div class="blog_img" style="width: 100% !important;">
                                    <a href="<?= base_url('news-single/' . $news_item['n_uid']); ?>">
                                        <img style="width: 100%; height: 333px; object-fit: cover;" src="<?= base_url('file_manager/news/' . $news_item['n_preview_img']); ?>" alt="<?= htmlentities(base64_decode($news_item_title[$this->session->userdata('site_lang')])); ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog_content">
                                    <div class="blog_text">
                                        <div class="blog_tags">
                                            <a class="blog_tags_cat" style="background-color: <?= $news_item['c_bg_color']; ?>;" href="<?= base_url('news/category/' . strtolower(htmlentities(base64_decode($news_item_category['en'])))); ?>"><?= htmlentities(base64_decode($news_item_category[$this->session->userdata('site_lang')])); ?></a>
                                        </div>
                                        <h5 class="blog_heading">
                                            <a href="<?= base_url('news-single/' . $news_item['n_uid']); ?>"><?= htmlentities(base64_decode($news_item_title[$this->session->userdata('site_lang')])); ?></a>
                                        </h5>
                                        <ul class="blog_meta">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <span><?= $news_item["n_created_date"]; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p>
                                            <?= htmlentities(base64_decode($news_item_short[$this->session->userdata('site_lang')])); ?>
                                        </p>
                                        <a href="<?= base_url('news-single/' . $news_item['n_uid']); ?>" class="btn btn-dark btn-sm"><?= $this->lang->line("read_more"); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php
                $news_list_pagination = $this->pagination->create_links();
                $news_list_pagination = str_replace("<a", "<a class=\"page-link\"", $news_list_pagination);
                echo $news_list_pagination;
                ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>