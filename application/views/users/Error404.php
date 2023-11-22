<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/HeaderSlider"); ?>

<div class="section breadcrumb_section background_bg overlay_bg_70 page_title_light" data-img-src="<?= base_url('public/user/assets/images/breadcrumb/about_bg.jpg'); ?>">
    <div class="container">
        <div class="row dalign-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Page Title</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Categories</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Category #1</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Lorem ipsum dolor.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- START 404 SECTION -->
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="text-center">
                    <div class="error_txt">Page Not Found</div>
                    <h5 class="sub_error_txt mb-2 mb-sm-4">oops! The page you requested was not found!</h5>
                    <p>The page you are looking for was removed, renamed or might never existed.</p>
                    <div class="search_form pb-3 pb-sm-4">
                        <form method="post">
                            <input name="text" id="text" type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="btn icon_search"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <a href="index.html" class="btn btn-default">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END 404 SECTION -->

<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>