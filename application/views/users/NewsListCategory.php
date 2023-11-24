<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/HeaderSlider"); ?>

<div class="section">
    <div class="container">
        <div class="row">


            <div class="col-lg-12">
                <div class="blog_list list_post">
                    <div class="heading_s2">
                        <h4><?= $this->lang->line("all_news"); ?></h4>
                    </div>
                    <?php foreach ($news_list as $news_item) : ?>
                        <?php
                        $news_item_title = json_decode($news_item["n_title"], TRUE);
                        $news_item_short = json_decode($news_item["n_short"], TRUE);
                        $news_item_category = json_decode($news_item["c_name"], TRUE);
                        ?>
                        <div class="blog_post d-flex flex-row align-items-center">

                            <div class="col-lg-6">
                                <div class="blog_img" style="width: 100% !important;">
                                    <a href="#">
                                        <img style="width: 100%; height: 333px; object-fit: cover;" src="<?= base_url('file_manager/news/' . $news_item['n_preview_img']); ?>" alt="<?= htmlentities(base64_decode($news_item_title[$this->session->userdata('site_lang')])); ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog_content">
                                    <div class="blog_text">
                                        <div class="blog_tags">
                                            <a class="blog_tags_cat" style="background-color: <?= $news_item['c_bg_color']; ?>;" href="#"><?= htmlentities(base64_decode($news_item_category[$this->session->userdata('site_lang')])); ?></a>
                                        </div>
                                        <h5 class="blog_heading">
                                            <a href="#"><?= htmlentities(base64_decode($news_item_title[$this->session->userdata('site_lang')])); ?></a>
                                        </h5>
                                        <ul class="blog_meta">
                                            <li>
                                                <a href="#">
                                                    <i class="ti-calendar"></i>
                                                    <span><?= $news_item["n_created_date"]; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p>
                                            <?= htmlentities(base64_decode($news_item_short[$this->session->userdata('site_lang')])); ?>
                                        </p>
                                        <a href="#" class="btn btn-dark btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>



                        </div>

                    <?php endforeach; ?>





                </div>





                <div class="py-3 py-md-4 mt-2 mt-sm-0 mt-lg-5 border-top border-bottom">
                <?php 
                
                $rest = $this->pagination->create_links();
                $rest = str_replace("<a", "<a class=\"page-link\"", $rest);
                
                echo $rest;
                
                ?>
                </div>

<!-- 
                <div class="py-3 py-md-4 mt-2 mt-sm-0 mt-lg-5 border-top border-bottom">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="linearicons-arrow-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                    </ul>
                </div> -->







            </div>







        </div>
    </div>
</div>
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>