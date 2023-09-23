<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning m-0">Branding</div>
        <div>
            <button type="submit" form="branding_form" class="btn btn-outline-warning">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
            </button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#branding_modal_delete">
                <i class="bi bi-trash me-1"></i>
                Remove
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("branding_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('branding_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('branding_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('branding_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('branding_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('branding_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('branding_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <?php if (!is_null($admin_branding->logo_dark->file_name) || !is_null($admin_branding->logo_light->file_name) || !is_null($admin_branding->favicon->file_name)) : ?>
            <h1 class="h5 text-warning mb-3">Current image</h1>
            <div class="row mb-3">
                <?php if (!is_null($admin_branding->logo_dark->file_name)) : ?>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="h5 text-info mb-3">Logo Dark</h1>
                        <img src="<?= base_url("file_manager/branding/") . $admin_branding->logo_dark->file_name; ?>" width="128px" height="64px" style="object-fit: contain;" alt="Logo_Dark">
                    </div>
                <?php endif; ?>
                <?php if (!is_null($admin_branding->logo_light->file_name)) : ?>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="h5 text-info mb-3">Logo Light</h1>
                        <img src="<?= base_url("file_manager/branding/") . $admin_branding->logo_light->file_name; ?>" width="128px" height="64px" style="object-fit: contain;" alt="Logo_Light">
                    </div>
                <?php endif; ?>
                <?php if (!is_null($admin_branding->favicon->file_name)) : ?>
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="h5 text-info mb-3">Favicon</h1>
                        <img src="<?= base_url("file_manager/branding/") . $admin_branding->favicon->file_name; ?>" width="128px" height="64px" style="object-fit: contain;" alt="Favicon">
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <h1 class="h5 text-warning mb-3">Image</h1>
        <form action="<?= base_url('admin/branding-edit-action'); ?>" method="POST" enctype="multipart/form-data" id="branding_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="logo_dark_img_label">Logo Dark</label>
                        </div>
                        <div class="col-md-9">
                            <input name="logo_dark_img" type="file" class="form-control form-control-sm" id="logo_dark_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="logo_light_img_label">Logo Light</label>
                        </div>
                        <div class="col-md-9">
                            <input name="logo_light_img" type="file" class="form-control form-control-sm" id="logo_light_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="favicon_img_label">Favicon</label>
                        </div>
                        <div class="col-md-9">
                            <input name="favicon_img" type="file" class="form-control form-control-sm" id="favicon_img_label">
                        </div>
                    </div>
                </li>
                <h1 class="h5 text-warning mb-3 mt-3">Visibility</h1>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="logo_dark_visibility_label">Logo Dark</label>
                    <div class="form-check form-switch">
                        <input name="logo_dark_visibility" type="checkbox" class="form-check-input" id="logo_dark_visibility_label" <?= $admin_branding->logo_dark->visibility ? "checked" : ""; ?>>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="logo_light_visibility_label">Logo Light</label>
                    <div class="form-check form-switch">
                        <input name="logo_light_visibility" type="checkbox" class="form-check-input" id="logo_light_visibility_label" <?= $admin_branding->logo_light->visibility ? "checked" : ""; ?>>
                    </div>
                </li>
                <h1 class="h5 text-warning mb-3 mt-3">Other</h1>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="site_title_prefix_label">Title Prefix</label>
                        </div>
                        <div class="col-md-9">
                            <input name="site_title_prefix" type="text" class="form-control form-control-sm" id="site_title_prefix_label" placeholder="Stimul News" value="<?= $admin_branding->title_prefix; ?>">
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
<div class="modal fade text-center" id="branding_modal_delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to remove the branding?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/branding-delete'); ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>