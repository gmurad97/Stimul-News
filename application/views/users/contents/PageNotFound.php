<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>


<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="text-center">
                    <div class="error_txt">404 Page Not Found</div>
                    <h5 class="sub_error_txt mb-2 mb-sm-4">The page you requested was not found!</h5>
                    <p>
                        The page you are looking for was removed, renamed or might never existed.
                    </p>
                    <div class="search_form pb-3 pb-sm-4">
                        <form>
                            <input type="text" id="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn icon_search">
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </form>
                    </div>
                    <a href="<?= base_url('home'); ?>" class="btn btn-default">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>