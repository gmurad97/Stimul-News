<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success text-uppercase text-header-shadow m-0">
            <i class="bi bi-flower1 me-1"></i>
            Branding Create
        </div>
        <div>
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
        <form action="<?= base_url('admin/branding-create-action'); ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="crud_form">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h1 class="h5 text-success mb-3">Image</h1>
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="logo_dark_img_label">Logo Dark</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="logo_dark_img" type="file" class="form-control form-control-sm" id="logo_dark_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="logo_light_img_label">Logo Light</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="logo_light_img" type="file" class="form-control form-control-sm" id="logo_light_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="favicon_img_label">Favicon</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="favicon_img" type="file" class="form-control form-control-sm" id="favicon_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h1 class="h5 text-success my-3">Visibility</h1>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="logo_dark_visibility_label">Logo Dark</label>
                        <div class="form-check form-switch">
                            <input name="logo_dark_visibility" type="checkbox" class="form-check-input" id="logo_dark_visibility_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="logo_light_visibility_label">Logo Light</label>
                        <div class="form-check form-switch">
                            <input name="logo_light_visibility" type="checkbox" class="form-check-input" id="logo_light_visibility_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h1 class="h5 text-success my-3">Other</h1>
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="site_title_prefix_label">Site Title Prefix</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="site_title_prefix" type="text" class="form-control form-control-sm" id="site_title_prefix_label" placeholder="Stimul News">
                        </div>
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