<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning m-0">PARTNERS EDIT</div>
        <div>
            <button type="submit" form="partners_form" class="btn btn-outline-warning">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
            </button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#partners_modal_delete">
                <i class="bi bi-trash me-1"></i>
                Remove
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("partners_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('partners_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('partners_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('partners_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('partners_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('partners_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('partners_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <?php
        $partner_id = $partner_data["p_id"];
        $partner_options = json_decode($partner_data["p_options"]);
        ?>
        <form action="<?= base_url('partners-edit-action/') . $partner_id; ?>" method="POST" enctype="multipart/form-data" id="partners_form">
            <h1 class="h5 text-warning mb-3">Current image</h1>
            <div class="row mb-3">
                <div class="col-md-4 d-flex flex-column justify-content-center align-items-start ps-3">
                    <img src="<?= base_url('file_manager/partners/') . $partner_options->partner_img; ?>" width="128px" style="object-fit: contain;" alt="<?= $partner_options->partner_title; ?>">
                </div>
            </div>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="category_img_label">Breadcrumb Image</label>
                        </div>
                        <div class="col-md-9">
                            <input name="category_img" type="file" class="form-control form-control-sm" id="category_img_label">
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="category_title_label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input name="category_title" type="text" class="form-control form-control-sm" id="category_title_label" placeholder="Business">
                        </div>
                    </div>
                </li>



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