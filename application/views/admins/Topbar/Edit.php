<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="card">
    <div class="card-header text-success fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="text-warning">TOPBAR</div>
        <div>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#topbar_modal_delete">Remove</button>
            <button type="submit" form="topbar_form" class="btn btn-outline-warning">Edit</button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("topbar_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('topbar_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('topbar_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="fa-solid fa-circle-check me-2"></i>
                    <?= $this->session->flashdata('topbar_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('topbar_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('topbar_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <h1 class="h4 text-warning">Visibility</h1>
        <form action="<?= base_url('topbar-edit-action'); ?>" method="POST" enctype="application/json" id="topbar_form">
            <?php
            $admin_topbar_decoded = json_decode($admin_topbar_encoded["t_options"]);
            ?>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Topbar</div>
                    <div class="form-check form-switch">
                        <input name="topbar_self" type="checkbox" class="form-check-input" <?= $admin_topbar_decoded->topbar_self ? "checked" : ""; ?>>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Date</div>
                    <div class="form-check form-switch">
                        <input name="topbar_date" type="checkbox" class="form-check-input" <?= $admin_topbar_decoded->topbar_date ? "checked" : ""; ?>>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Time</div>
                    <div class="form-check form-switch">
                        <input name="topbar_time" type="checkbox" class="form-check-input" <?= $admin_topbar_decoded->topbar_time ? "checked" : ""; ?>>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Weather</div>
                    <div class="form-check form-switch">
                        <input name="topbar_weather" type="checkbox" class="form-check-input" <?= $admin_topbar_decoded->topbar_weather ? "checked" : ""; ?>>
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
<div class="modal fade text-center" id="topbar_modal_delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to remove the topbar?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('topbar-delete'); ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admins/includes/FooterScripts"); ?>