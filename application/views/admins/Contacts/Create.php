<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success text-uppercase text-header-shadow m-0">
            <i class="bi bi-headset me-1"></i>
            Contacts Create
        </div>
        <div>
            <button type="submit" form="crud_form" class="btn btn-success btn-sm rounded-2">
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
        <form action="<?= base_url('admin/contacts-create-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" class="was-validated" id="crud_form">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="row">
                        <h1 class="h5 text-success mb-3">Social Link</h1>
                    </div>
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="facebook_link_label" class="text-primary d-flex flex-row align-items-center fw-bold">
                                <i class="bi bi-facebook fs-5 me-2"></i>
                                Facebook
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">URL</span>
                                    <input required name="facebook_link" type="url" class="form-control" placeholder="https://example.com/" id="facebook_link_label">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="facebook_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="twitter_link_label" class="text-info d-flex flex-row align-items-center fw-bold">
                                <i class="bi bi-twitter fs-5 me-2"></i>
                                Twitter X
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">URL</span>
                                    <input required name="twitter_link" type="url" class="form-control" placeholder="https://example.com/" id="twitter_link_label">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="twitter_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="google_plus_link_label" class="text-danger d-flex flex-row align-items-center fw-bold">
                                <i class="bi bi-google fs-5 me-2"></i>
                                Google Plus
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">URL</span>
                                    <input required name="google_plus_link" type="url" class="form-control" placeholder="https://example.com/" id="google_plus_link_label">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="google_plus_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="instagram_link_label" class="text-pink d-flex flex-row align-items-center fw-bold">
                                <i class="bi bi-instagram fs-5 me-2"></i>
                                Instagram
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">URL</span>
                                    <input required name="instagram_link" type="url" class="form-control" placeholder="https://example.com/" id="instagram_link_label">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="instagram_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="youtube_link_label" class="text-danger d-flex flex-row align-items-center fw-bold">
                                <i class="bi bi-youtube fs-5 me-2"></i>
                                Youtube
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">URL</span>
                                    <input required name="youtube_link" type="url" class="form-control" placeholder="https://example.com/" id="youtube_link_label">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="youtube_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="pinterest_link_label" class="text-danger d-flex flex-row align-items-center fw-bold">
                                <i class="bi bi-pinterest fs-5 me-2"></i>
                                Pinterest
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">URL</span>
                                    <input required name="pinterest_link" type="url" class="form-control" placeholder="https://example.com/" id="pinterest_link_label">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="pinterest_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h1 class="h5 text-success my-3">Information</h1>
                    </div>
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="address_info_label">
                                <i class="bi bi-geo-alt-fill fs-5 me-2"></i>
                                Address
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <input required name="address_info" type="text" id="address_info_label" class="form-control form-control-sm">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="address_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="mail_info_label">
                                <i class="bi bi-envelope-at-fill fs-5 me-2"></i>
                                Mail
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <input required name="mail_info" type="text" id="mail_info_label" class="form-control form-control-sm">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="mail_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="phone_info_label">
                                <i class="bi bi-telephone-fill fs-5 me-2"></i>
                                Phone
                            </label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group flex-nowrap">
                                    <input required name="phone_info" type="text" id="phone_info_label" class="form-control form-control-sm">
                                </div>
                                <div class="form-check ms-3">
                                    <input name="phone_status" type="checkbox" class="form-check-input">
                                </div>
                            </div>
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