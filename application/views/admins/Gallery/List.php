<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-list border-list bg-opacity-5">
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-info text-header-shadow m-0">
            <i class="bi bi-card-image me-1"></i>
            Gallery List
        </div>
        <div>
            <button type="submit" form="crud_form" class="btn btn-sm btn-success rounded-2">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("crud_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('crud_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('crud_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <p class="d-flex flex-row justify-content-start align-items-center mb-0">
                    <i class="<?= $this->session->flashdata('crud_alert')['alert_icon']; ?> fs-5 me-2"></i>
                    <strong class="fw-bold me-2"><?= $this->session->flashdata('crud_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('crud_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/fancybox/css/fancybox.css'); ?>">
        <script src="<?= base_url('public/admin/assets/plugins/fancybox/js/fancybox.umd.js'); ?>"></script>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">




                    <div class="card bg-edit border-edit bg-opacity-5">
                        <div class="card-body">
                            <a href="https://i.pinimg.com/originals/41/51/b6/4151b61ab7bda3c282660432d4a4a255.jpg" data-fancybox="gallery">
                                <img src="https://i.pinimg.com/originals/41/51/b6/4151b61ab7bda3c282660432d4a4a255.jpg" alt="Gallery Image" style="width: 100%; height:128px;">
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center">
                                    <a href="javascript:void(0);" class="theme-red text-decoration-none">
                                        <i class="bi bi-trash fs-5"></i>
                                        Remove
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 text-center">
                                    <a href="javascript:void(0);" class="theme-blue text-decoration-none">
                                        <i class="bi bi-box-arrow-up-right fs-5"></i>
                                        Link
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <script>
            Fancybox.bind("[data-fancybox]");
        </script>
    </div>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>