<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning m-0">PARTNERS EDIT</div>
        <div>
            <a href="<?= base_url('partners-list'); ?>" class="btn btn-outline-info">
                <i class="bi bi-list-nested me-1"></i>
                Partners List
            </a>
            <button type="submit" form="partners_form" class="btn btn-outline-warning">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
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
        $partner_id = $partner_data["p_uid"];
        $partner_options = json_decode($partner_data["p_data"]);
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
                            <label for="partner_img_label">Image</label>
                        </div>
                        <div class="col-md-9">
                            <input name="partner_img" type="file" class="form-control form-control-sm" id="partner_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="partner_link_label">Link</label>
                        </div>
                        <div class="col-md-9">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text">URL</span>
                                <input name="partner_link" type="url" class="form-control" placeholder="https://example.com/" id="partner_link_label" value="<?= $partner_options->partner_link; ?>">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="partner_title_label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <input name="partner_title" type="text" class="form-control form-control-sm" id="partner_title_label" placeholder="Stimul News" value="<?= $partner_options->partner_title; ?>">
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="partner_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="partner_status" type="checkbox" class="form-check-input" id="partner_status_label" <?= $partner_options->partner_status ? "checked" : "" ?>>
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