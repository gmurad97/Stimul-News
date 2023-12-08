<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_s2">
                    <h4><?= $this->lang->line("all_categories"); ?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($categories_list as $category_item) : ?>
                <?php $category_item_name = json_decode($category_item["c_name"], TRUE); ?>
                <div class="col-md-4 mb-4">
                    <div class="service_box">
                        <a href="<?= base_url('news/' . strtolower(htmlentities(base64_decode($category_item_name['en'])))); ?>">
                            <img src="<?= base_url('file_manager/categories/' . $category_item['c_img']); ?>">
                            <span class="lable"><?= htmlentities(base64_decode($category_item_name[$this->session->userdata("site_lang")])); ?></span>
                        </a>
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
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>