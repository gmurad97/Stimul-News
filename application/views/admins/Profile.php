<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-primary border-list bg-opacity-5">
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-info text-header-shadow m-0">
            <i class="bi bi-eye me-1"></i>
            <?= $admin_detail["a_name"] . " " . $admin_detail["a_surname"] . " - Profile view"; ?>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <a href="<?= base_url('file_manager/system/admin/') . $admin_detail["a_img"]; ?>" data-lity>
                            <img width="150" height="150" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('file_manager/system/admin/') . $admin_detail["a_img"]; ?>" title="<?= $admin_detail["a_name"] . " " . $admin_detail["a_surname"]; ?>" alt="Admin Image">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">

                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">UID</td>
                            <td><?= $admin_detail["a_uid"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">Name</td>
                            <td><?= $admin_detail["a_name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">Surname</td>
                            <td><?= $admin_detail["a_surname"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">Email</td>
                            <td><?= $admin_detail["a_email"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">Username</td>
                            <td><?= $admin_detail["a_username"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">Role</td>
                            <td><?= $admin_detail["a_role"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger text-uppercase">Verified</td>
                            <td><?= $admin_detail["a_verified"]; ?></td>
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