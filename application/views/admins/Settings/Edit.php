<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-edit border-edit bg-opacity-5">
    <div class="card-header border-edit fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-warning text-header-shadow m-0">
            <i class="bi bi-gear me-1"></i>
            Settings Create
        </div>
        <div>
            <button type="button" class="btn btn-outline-danger btn-sm rounded-2" data-bs-toggle="modal" data-bs-target="#danger_modal">
                <i class="bi bi-trash me-1"></i>
                Remove
            </button>
            <a href="<?= base_url('admin/settings-dump-db'); ?>" class="btn btn-sm btn-outline-success rounded-2">
                <i class="bi bi-database-down me-1"></i>
                Dump DB
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
        $settings_uid = $settings_db["s_uid"];
        $settings_data = json_decode($settings_db["s_data"], FALSE);
        ?>
        <form action="<?= base_url('admin/settings-edit-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" id="crud_form">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="under_construction_label">
                            <i class="fa-solid fa-screwdriver-wrench text-warning me-1"></i>
                            Under Construction
                        </label>
                        <div class="form-check form-switch">
                            <input name="under_construction" type="checkbox" class="form-check-input" id="under_construction_label" <?= $settings_data->under_construction ? "checked" : ""; ?>>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="dark_mode_cms_label">
                            <i class="fa-solid fa-palette text-warning me-1"></i>
                            Dark Mode (CMS)
                        </label>
                        <div class="form-check form-switch">
                            <input name="dark_mode_cms" type="checkbox" class="form-check-input" id="dark_mode_cms_label" <?= $settings_data->dark_mode_cms ? "checked" : ""; ?>>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="snow_mode_label">
                            <i class="fa-regular fa-snowflake text-warning me-1"></i>
                            Snow Mode
                        </label>
                        <div class="form-check form-switch">
                            <input name="snow_mode" type="checkbox" class="form-check-input" id="snow_mode_label" <?= $settings_data->snow_mode ? "checked" : ""; ?>>
                        </div>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div class="card-footer border-warning">
        <?php if (empty($latest_dump_db_file)) : ?>
            <a href="javascript:void(0);" class="btn btn-sm btn-danger rounded-2">
                <i class="bi bi-database"></i>
                <strong>DB Backup:</strong> Not Found Latest Dump DB
            </a>
        <?php else : ?>
            <a href="<?= base_url($latest_dump_db_file); ?>" class="btn btn-sm btn-success rounded-2">
                <i class="bi bi-database"></i>
                <strong>DB Backup:</strong> Latest Dump DB (Download)
            </a>
        <?php endif; ?>
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
                <p class="h5 text-danger">Do you really want to remove the settings?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/settings-delete'); ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>