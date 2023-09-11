<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="card">
    <div class="card-header text-success fw-bold d-flex flex-row justify-content-between align-items-center">
        <div>
            TOPBAR
        </div>
        <div>
            <button type="submit" form="topbar_form" class="btn btn-outline-success">Create</button>
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
        <h1 class="h4 text-success">Visibility</h1>
        <form action="<?= base_url('topbar-create-action'); ?>" method="POST" enctype="application/json" id="topbar_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="topbar_self_label">Topbar</label>
                    <div class="form-check form-switch">
                        <input name="topbar_self" type="checkbox" class="form-check-input" id="topbar_self_label">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="topbar_date_label">Date</label>
                    <div class="form-check form-switch">
                        <input name="topbar_date" type="checkbox" class="form-check-input" id="topbar_date_label">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="topbar_time_label">Time</label>
                    <div class="form-check form-switch">
                        <input name="topbar_time" type="checkbox" class="form-check-input" id="topbar_time_label">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="topbar_weather_label">Weather</label>
                    <div class="form-check form-switch">
                        <input name="topbar_weather" type="checkbox" class="form-check-input" id="topbar_weather_label">
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