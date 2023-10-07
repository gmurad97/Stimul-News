<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-edit border-edit bg-opacity-5">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning text-uppercase text-header-shadow m-0">
            <i class="bi bi-people me-1"></i>
            Partners Edit
        </div>
        <div>
            <a href="<?= base_url('admin/partners-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>
            <button type="submit" form="crud_form" class="btn btn-warning btn-sm rounded-2">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
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
        <?php
        $partner_id = $partner_data["p_uid"];
        $partner_info = json_decode($partner_data["p_data"]);
        ?>
        <form action="<?= base_url('admin/partners-edit-action/') . $partner_id; ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="crud_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label class="fw-bold text-warning">Current Image</label>
                        <a href="<?= base_url('file_manager/partners/') . $partner_info->partner_img; ?>" class="btn btn-outline-yellow btn-sm rounded-2" data-lity>
                            Show Image
                            <span class="img" style="background-image: url(<?= base_url('file_manager/partners/') . $partner_info->partner_img; ?>)"></span>
                        </a>
                    </div>
                </li>
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
                                <input required name="partner_link" type="url" class="form-control" placeholder="https://example.com/" id="partner_link_label" value="<?= htmlentities(base64_decode($partner_info->partner_link)); ?>">
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
                            <input required name="partner_title" type="text" class="form-control form-control-sm" id="partner_title_label" placeholder="Stimul News" value="<?= htmlentities(base64_decode($partner_info->partner_title)); ?>">
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="partner_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="partner_status" type="checkbox" class="form-check-input" id="partner_status_label" <?= $partner_info->partner_status ? "checked" : "" ?>>
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