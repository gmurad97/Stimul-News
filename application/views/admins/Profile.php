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
                <div class="col-md-12 my-5">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <a href="<?= base_url('file_manager/system/admin/') . $admin_detail["a_img"]; ?>" data-lity>
                            <img width="192" height="192" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('file_manager/system/admin/') . $admin_detail["a_img"]; ?>" title="<?= $admin_detail["a_name"] . " " . $admin_detail["a_surname"]; ?>" alt="Admin Image">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <caption style="caption-side: top;" class="text-uppercase">Additional Information</caption>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="fas fa-fingerprint text-info px-2"></i>
                                UID
                            </td>
                            <td><?= $admin_detail["a_uid"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="fas fa-signature text-info px-2"></i>
                                Name
                            </td>
                            <td><?= $admin_detail["a_name"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="fas fa-signature text-info px-2"></i>
                                Surname
                            </td>
                            <td><?= $admin_detail["a_surname"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="bi bi-envelope-at text-info px-2"></i>
                                Email
                            </td>
                            <td>
                                <a href="mailto:<?= $admin_detail["a_email"]; ?>" class="text-decoration-none">
                                    <?= $admin_detail["a_email"]; ?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="bi bi-person-bounding-box text-info px-2"></i>
                                Username
                            </td>
                            <td><?= $admin_detail["a_username"]; ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="fa-solid fa-wand-magic-sparkles text-info px-2"></i>
                                Role
                            </td>
                            <td class="text-uppercase">
                                <?php if ($admin_detail["a_role"] === "999") : ?>
                                    <span class="text-warning fw-bold">Root</span>
                                <?php elseif ($admin_detail["a_role"] === "666") : ?>
                                    <span class="text-warning fw-bold">Admin</span>
                                <?php elseif ($admin_detail["a_role"] === "333") : ?>
                                    <span class="fw-bold">Reporter</span>
                                <?php else : ?>
                                    <span class="text-danger fw-bold">Hacker</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-secondary text-uppercase">
                                <i class="bi bi-patch-check text-info px-2"></i>
                                Verified
                            </td>
                            <td class="text-uppercase">
                                <?php if ($admin_detail["a_verified"]) : ?>
                                    <span class="text-success fw-bold">True</span>
                                <?php else : ?>
                                    <span class="text-danger fw-bold">False</span>
                                <?php endif; ?>
                            </td>
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