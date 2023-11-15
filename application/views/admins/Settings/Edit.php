<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-success text-header-shadow m-0">
            <i class="bi bi-distribute-vertical me-1"></i>
            Topbar Create
        </div>
        <div>
            <button type="submit" form="crud_form" class="btn btn-sm btn-success rounded-2">
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
        <form action="<?= base_url('admin/topbar-create-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" id="crud_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <h1 class="h5 text-success mb-3">Visibility</h1>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_self_label">Topbar</label>
                        <div class="form-check form-switch">
                            <input name="topbar_self" type="checkbox" class="form-check-input" id="topbar_self_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_date_label">Date</label>
                        <div class="form-check form-switch">
                            <input name="topbar_date" type="checkbox" class="form-check-input" id="topbar_date_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_time_label">Time</label>
                        <div class="form-check form-switch">
                            <input name="topbar_time" type="checkbox" class="form-check-input" id="topbar_time_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="topbar_weather_label">Weather</label>
                        <div class="form-check form-switch">
                            <input name="topbar_weather" type="checkbox" class="form-check-input" id="topbar_weather_label">
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