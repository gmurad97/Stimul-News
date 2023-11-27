<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>
<?php
$news_title = json_decode($news_single_data["n_title"], TRUE);
$news_full = json_decode($news_single_data["n_full"], TRUE);
$news_category_name = json_decode($news_single_data["c_name"], TRUE);
?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single_post">
                    <div class="blog_img">
                        <img src="<?= base_url('file_manager/news/' . $news_single_data['n_preview_img']); ?>" alt="<?= htmlentities(base64_decode($news_title['en'])); ?>">
                        <div class="blog_tags">
                            <a class="blog_tags_cat" style="background-color: <?= $news_single_data["c_bg_color"]; ?>;" href="<?= base_url('news/category/' . strtolower(htmlentities(base64_decode($news_category_name['en'])))); ?>"><?= htmlentities(base64_decode($news_category_name[$this->session->userdata("site_lang")])); ?></a>
                        </div>
                    </div>
                    <div class="blog_content">
                        <div class="blog_text">
                            <h2 class="blog_title"><?= htmlentities(base64_decode($news_title[$this->session->userdata("site_lang")])); ?></h2>
                            <ul class="blog_meta">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="far fa-calendar-alt"></i>
                                        <?= $news_single_data["n_created_date"] ?>
                                    </a>
                                </li>
                            </ul>
                            <div class="col-12">
                                <?= base64_decode($news_full[$this->session->userdata("site_lang")]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>