<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success text-uppercase text-header-shadow m-0">
            <i class="bi bi-tags me-1"></i>
            Categories Create
        </div>
        <div>
            <a href="<?= base_url('admin/categories-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>
            <button type="submit" form="crud_form" class="btn btn-success btn-sm rounded-2">
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
        <form action="<?= base_url('admin/categories-create-action'); ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="crud_form">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <ul class="nav nav-tabs nav-tabs-v2">
                        <li class="nav-item me-3">
                            <a href="#tabs_category_en_name" class="nav-link active" data-bs-toggle="tab">EN</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#tabs_category_ru_name" class="nav-link" data-bs-toggle="tab">RU</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#tabs_category_az_name" class="nav-link" data-bs-toggle="tab">AZ</a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade show active" id="tabs_category_en_name">
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-3">
                                    <label for="category_en_name_label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="category_en_name" type="text" class="form-control form-control-sm" id="category_en_name_label" placeholder="Business">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs_category_ru_name">
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-3">
                                    <label for="category_name_ru_label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="category_ru_name" type="text" class="form-control form-control-sm" id="category_name_ru_label" placeholder="Бизнес">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs_category_az_name">
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-3">
                                    <label for="category_az_name_label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="category_az_name" type="text" class="form-control form-control-sm" id="category_az_name_label" placeholder="Biznes">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="category_img_label">Breadcrumb Image</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="category_img" type="file" class="form-control form-control-sm" id="category_img_label">
                        </div>
                    </div>
                </li>
                <script src="<?= base_url('public/admin/assets/js/jquery-3.7.1.min.js'); ?>"></script>
                <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/spectrum/css/spectrum.min.css'); ?>">
                <script src="<?= base_url('public/admin/assets/plugins/spectrum/js/spectrum.min.js'); ?>"></script>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="category_colorpicker">Background Color</label>
                    <div class="form-check form-switch">
                        <input required name="category_bg_color" type="text" value="#00AA00" class="form-control" id="category_colorpicker">
                    </div>
                </li>
                <script>
                    $('#category_colorpicker').spectrum({
                        "showInput": true
                    });
                </script>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="category_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="category_status" type="checkbox" class="form-check-input" id="category_status_label">
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>