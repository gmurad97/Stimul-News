<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-list border-list bg-opacity-5">
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-info text-uppercase text-header-shadow m-0">
            <i class="bi bi-star-half me-1"></i>
            Profile List
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
        <table class="table table-responsive table-hover text-nowrap w-100" id="categories-datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Verified</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                <?php $id_counter = 1; ?>
                <?php foreach ($profiles_data as $profile_data) : ?>
                    <?php $isCurrentUser =  $profile_data["a_uid"] === $this->session->userdata('admin_auth')['admin_uid']; ?>
                    <tr class="<?= $isCurrentUser ? 'bg-indigo bg-opacity-20' : ''; ?>">
                        <td><?= $id_counter++; ?></td>
                        <td>
                            <?php if (!empty($profile_data["a_img"])) : ?>
                                <a href="<?= base_url('file_manager/system/admin/') . $profile_data["a_img"]; ?>" data-lity>
                                    <img width="64" height="64" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('file_manager/system/admin/') . $profile_data["a_img"]; ?>" title="<?= $profile_data["a_name"] . " " . $profile_data["a_surname"]; ?>" alt="Admin Image">
                                </a>
                            <?php else : ?>
                                <a href="<?= base_url('public/admin/assets/img/user/profile.jpg'); ?>" data-lity>
                                    <img width="64" height="64" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('public/admin/assets/img/user/profile.jpg'); ?>" title="<?= $profile_data["a_name"] . " " . $profile_data["a_surname"]; ?>" alt="Admin Image">
                                </a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?= $profile_data["a_name"]; ?>
                        </td>
                        <td><?= $profile_data["a_surname"]; ?></td>
                        <td>
                            <?php if ($global_is_admin || $isCurrentUser) : ?>
                                <?= $profile_data["a_username"]; ?>
                            <?php else : ?>
                                <?= str_repeat("*", strlen($profile_data["a_username"])); ?>
                            <?php endif; ?>
                        </td>
                        <td>
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
                        </td>
                        <td>
                            <?php if ($profile_data["a_status"]) : ?>
                                <span class="badge bg-success p-2 w-90px text-uppercase">
                                    <i class="fa-regular fa-circle-check"></i>
                                    TRUE
                                </span>
                            <?php else : ?>
                                <span class="badge bg-danger p-2 w-90px text-uppercase">
                                    <i class="fa-regular fa-circle-xmark"></i>
                                    FALSE
                                </span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <nav class="nav flex-row">

                                <a href="<?= base_url('admin/profile-detail/') . $profile_data['a_uid']; ?>" class="nav-link <?= $global_is_admin || $isCurrentUser ? '' : 'disabled'; ?> theme-info p-0 me-3">
                                    <i class="bi bi-eye fs-5"></i>
                                </a>


                                <a href="<?= base_url('admin/profile-edit/') . $profile_data["a_uid"]; ?>" class="nav-link <?= $global_is_admin || $isCurrentUser ? '' : 'disabled'; ?> theme-warning p-0 me-3">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </a>


                                <a href="javascript:void(0);" class="nav-link <?= $global_is_admin && $profile_data["a_role"] != '999' ? '' : 'disabled'; ?> theme-danger p-0" data-link="<?= base_url('admin/profile-delete/') . $profile_data["a_uid"]; ?>" data-bs-toggle="modal" data-bs-target="#danger_modal">
                                    <i class="bi bi-trash fs-5"></i>
                                </a>



                            </nav>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Verified</th>
                    <th>Control</th>
                </tr>
            </tfoot>
        </table>
        <!--DATA TABLE SCRIPTS & STYLES - START-->
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/datatable/css/buttons.bootstrap5.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/datatable/css/responsive.bootstrap5.min.css'); ?>">
        <script src="<?= base_url('public/admin/assets/js/jquery-3.7.1.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/dataTables.buttons.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.colVis.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.flash.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.html5.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.print.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?= base_url('public/admin/assets/plugins/datatable/js/responsive.bootstrap5.min.js'); ?>"></script>
        <script>
            $("#categories-datatable").DataTable({
                dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end align-items-center'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
                lengthMenu: [10, 20, 30, 40, 50],
                responsive: true,
                buttons: [{
                        extend: "print",
                        className: "btn btn-sm btn-outline-default ms-2"
                    },
                    {
                        extend: "csv",
                        className: "btn btn-sm btn-outline-default"
                    }
                ],
                language: {
                    paginate: {
                        previous: "<i class=\"fa-solid fa-chevron-left\"></i>",
                        next: "<i class=\"fa-solid fa-chevron-right\"></i>",
                    }
                }
            });
        </script>
        <!--DATA TABLE SCRIPTS & STYLES - ENDED-->
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
                <p class="h5 text-danger">Do you really want to remove the profile?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="javascript:void(0);" class="btn btn-outline-danger" id="modal_delete_link">Remove</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("focus", "[data-link]", function() {
        var link = $(this).data("link");
        $("#modal_delete_link").attr("href", link);
    });
</script>
<?php $this->load->view("admins/includes/FooterScripts"); ?>