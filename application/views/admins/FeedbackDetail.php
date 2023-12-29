<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-primary border-list bg-opacity-5">
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-info text-header-shadow text-truncate m-0" style="max-width:512px;">
            <?= $feedback_data["f_uid"] . "." . $feedback_data["f_first_name"] . " " . $feedback_data["f_last_name"] . " - Feedback"; ?>
        </div>
        <div>
            <a href="<?= base_url('admin/profile-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-cpu me-1"></i>
                Dashboard
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" style="word-break: break-all;">
                        <caption style="caption-side: top;" class="text-uppercase">Additional Information</caption>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase" style="min-width: 150px;">
                                <i class="fas fa-fingerprint text-info px-2"></i>
                                UID
                            </td>
                            <td><?= $feedback_data["f_uid"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="fas fa-signature text-info px-2"></i>
                                Name
                            </td>
                            <td><?= $feedback_data["f_first_name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="fas fa-signature text-info px-2"></i>
                                Surname
                            </td>
                            <td><?= $feedback_data["f_last_name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="bi bi-envelope-at text-info px-2"></i>
                                Email
                            </td>
                            <td>
                                <a href="mailto:<?= $feedback_data["f_email"]; ?>" class="text-decoration-none">
                                    <?= $feedback_data["f_email"]; ?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="bi bi-chat-left-dots text-info px-2"></i>
                                Message
                            </td>
                            <td><?= $feedback_data["f_message"]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>