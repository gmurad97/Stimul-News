<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-edit border-edit bg-opacity-5">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning text-uppercase text-header-shadow m-0">
            <i class="bi bi-person-bounding-box me-1"></i>
            <?= $profile_data["a_name"] . " " . $profile_data["a_surname"] . " - Profile Edit"; ?>
        </div>
        <div>
            <a href="<?= base_url('admin/profile-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
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
        <form action="<?= base_url('admin/profile-edit-action/') . $profile_data["a_uid"]; ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="crud_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-center align-items-center my-3">
                        <?php if (!empty($profile_data["a_img"])) : ?>
                            <a href="<?= base_url('file_manager/system/admin/') . $profile_data["a_img"]; ?>" data-lity>
                                <img width="192" height="192" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('file_manager/system/admin/') . $profile_data["a_img"]; ?>" title="<?= $profile_data["a_name"] . " " . $profile_data["a_surname"]; ?>" alt="Admin Image">
                            </a>
                        <?php else : ?>
                            <a href="<?= base_url('public/admin/assets/img/user/profile.jpg'); ?>" data-lity>
                                <img width="192" height="192" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('public/admin/assets/img/user/profile.jpg'); ?>" title="<?= $profile_data["a_name"] . " " . $profile_data["a_surname"]; ?>" alt="Admin Image">
                            </a>
                        <?php endif; ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="profile_img_label">Image</label>
                        </div>
                        <div class="col-md-9">
                            <input name="profile_img" type="file" class="form-control form-control-sm" id="profile_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="profile_name_label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="profile_name" type="text" class="form-control form-control-sm" id="profile_name_label" value="<?= $profile_data["a_name"]; ?>">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="profile_surname_label">Surname</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="profile_surname" type="text" class="form-control form-control-sm" id="profile_surname_label" value="<?= $profile_data["a_surname"]; ?>">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="profile_email_label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="profile_email" type="email" class="form-control form-control-sm" id="profile_email_label" value="<?= $profile_data["a_email"]; ?>">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="profile_username_label">Username</label>
                        </div>
                        <div class="col-md-9">
                            <input required name="profile_username" type="text" class="form-control form-control-sm" id="profile_username_label" value="<?= $profile_data["a_username"]; ?>">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="profile_new_password_label">New Password</label>
                        </div>
                        <div class="col-md-9">
                            <input name="profile_new_password" type="password" class="form-control form-control-sm" id="profile_new_password_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label>Role</label>
                        </div>
                        <div class="col-md-9">
                            <?php if ($profile_data["a_role"] === "999") : ?>
                                <span class="badge bg-warning w-90px py-2 text-uppercase">
                                    <i class="bi bi-star-fill"></i>
                                    Root
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            <?php elseif ($profile_data["a_role"] === "666") : ?>
                                <span class="badge bg-warning w-90px py-2 text-uppercase">
                                    <i class="bi bi-star-fill"></i>
                                    Admin
                                </span>
                            <?php elseif ($profile_data["a_role"] === "333") : ?>
                                <span class="badge bg-indigo w-90px py-2 text-uppercase">
                                    Redactor
                                </span>
                            <?php else : ?>
                                <span class="badge bg-danger p-2 text-uppercase">
                                    <i class="bi bi-eyeglasses"></i>
                                    Hacker
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="profile_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="profile_status" type="checkbox" class="form-check-input" id="profile_status_label" <?= $profile_data["a_status"] ? "checked" : ""; ?>>
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