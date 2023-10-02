<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning m-0">SUBSCRIBERS EDIT</div>
        <div>
            <a href="<?= base_url('admin/subscriber-list'); ?>" class="btn btn-outline-info">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>
            <button type="submit" form="subscribers_form" class="btn btn-outline-warning">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("subscribers_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('subscribers_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('subscribers_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('subscribers_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('subscribers_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('subscribers_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('subscribers_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>

        <?php
        $subcriber_id = $subscriber_info["s_uid"];
        $subscriber_data = json_decode($subscriber_info["s_data"], FALSE);
        ?>

        <form class="" action="<?= base_url('admin/subscribers-edit-action/').$subcriber_id; ?>" method="POST" enctype="application/x-www-form-urlencoded" id="subscribers_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="subscriber_email_label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="subscriber_email" type="email" class="form-control form-control-sm" id="subscriber_email_label" value="<?= $subscriber_data->subscriber->email; ?>" placeholder="name@example.com">
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="subscriber_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="subscriber_status" type="checkbox" class="form-check-input" id="subscriber_status_label" <?= $subscriber_data->subscriber->status ? "checked" : ""; ?>>
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