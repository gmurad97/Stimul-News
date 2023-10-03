<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning text-uppercase m-0">Topbar</div>
        <div>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#danger_modal">
                <i class="bi bi-trash me-1"></i>
                Remove
            </button>
            <button type="submit" form="crud_form" class="btn btn-warning">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("crud_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('crud_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('crud_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('crud_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('crud_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('crud_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('crud_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('admin/topbar-edit-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" id="crud_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <h1 class="h5 text-warning mb-3">Visibility</h1>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_self_label">Topbar</label>
                        <div class="form-check form-switch">
                            <input name="topbar_self" type="checkbox" class="form-check-input" id="topbar_self_label" <?= $admin_topbar->topbar_self ? "checked" : ""; ?>>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_date_label">Date</label>
                        <div class="form-check form-switch">
                            <input name="topbar_date" type="checkbox" class="form-check-input" id="topbar_date_label" <?= $admin_topbar->topbar_date ? "checked" : ""; ?>>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_time_label">Time</label>
                        <div class="form-check form-switch">
                            <input name="topbar_time" type="checkbox" class="form-check-input" id="topbar_time_label" <?= $admin_topbar->topbar_time ? "checked" : ""; ?>>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_weather_label">Weather</label>
                        <div class="form-check form-switch">
                            <input name="topbar_weather" type="checkbox" class="form-check-input" id="topbar_weather_label" <?= $admin_topbar->topbar_weather ? "checked" : ""; ?>>
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
<div class="modal fade text-center" id="danger_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to remove the topbar?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/topbar-delete'); ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>