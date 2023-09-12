<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="card">
    <div class="card-header text-success fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="text-warning">Branding</div>
        <div>
        <button type="submit" form="topbar_form" class="btn btn-outline-warning">Edit</button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#topbar_modal_delete">Remove</button>
        </div>
    </div>
    <div class="card-body">
        <h1 class="h4 text-success">Image</h1>
        <form action="<?= base_url('branding-create-action'); ?>" method="POST" enctype="multipart/form-data" id="logo_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="logo_dark_img_label">Logo Dark</label>
                    <div class="col-md-4">
                        <input name="logo_dark_img" type="file" class="form-control form-control-sm" id="logo_dark_img_label">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="logo_light_img_label">Logo Light</label>
                    <div class="col-md-4">
                        <input name="logo_light_img" type="file" class="form-control form-control-sm" id="logo_light_img_label">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="favicon_img_label">Favicon</label>
                    <div class="col-md-4">
                        <input name="favicon_img" type="file" class="form-control form-control-sm" id="favicon_img_label">
                    </div>
                </li>
                <h1 class="h4 text-success mt-3">Visibility</h1>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="logo_dark_visibility_label">Logo Dark</label>
                    <div class="form-check form-switch">
                        <input name="logo_dark_visibility" type="checkbox" class="form-check-input" id="logo_dark_visibility_label">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="logo_light_visibility_label">Logo Light</label>
                    <div class="form-check form-switch">
                        <input name="logo_light_visibility" type="checkbox" class="form-check-input" id="logo_light_visibility_label">
                    </div>
                </li>
                <h1 class="h4 text-success mt-3">Other</h1>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="site_title_prefix_label">Title Prefix</label>
                    <div class="col-md-4">
                        <input name="site_title_prefix" type="text" class="form-control form-control-sm" id="site_title_prefix_label">
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