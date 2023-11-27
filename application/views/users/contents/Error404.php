<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/HeaderSlider"); ?>
<div class="section breadcrumb_section background_bg overlay_bg_80 page_title_light" data-img-src="<?= base_url('public/user/assets/images/breadcrumb/404_bg.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title w-100 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-uppercase mb-5"><?= $this->lang->line("page_not_found"); ?></h1>
                    <h5 class="mb-3"><?= $this->lang->line("page_not_found_first_message"); ?></h5>
                    <p class="mb-5"><?= $this->lang->line("page_not_found_second_message"); ?></p>
                    <a href="<?= base_url('home'); ?>" class="btn btn-default"><?= $this->lang->line("back_to_home"); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>