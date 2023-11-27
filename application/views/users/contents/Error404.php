<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/HeaderSlider"); ?>
<div class="section breadcrumb_section background_bg overlay_bg_80 page_title_light" data-img-src="<?= base_url('public/user/assets/images/breadcrumb/404_bg.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title w-100 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-uppercase mb-5">Page Not Found</h1>
                    <h5 class="mb-3">oops! The page you requested was not found!</h5>
                    <p class="mb-5">The page you are looking for was removed, renamed or might never existed.</p>
                    <a href="<?= base_url('home'); ?>" class="btn btn-default">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>