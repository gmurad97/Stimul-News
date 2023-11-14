<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-list border-list bg-opacity-5">
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-info text-uppercase text-header-shadow m-0">
            <i class="bi bi-tags me-1"></i>
            Admins List
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
        <table class="table table-hover text-nowrap w-100" id="categories-datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Verified</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>

                <?php $id_counter = 1; ?>
                <?php foreach ($admins_db_list as $admin_data) : ?>
                    <tr>
                        <td><?= $id_counter++; ?></td>
                        <td>
                            <a href="<?= base_url('file_manager/system/admin/') . $admin_data["a_img"]; ?>" data-lity>
                                <img width="64" height="64" style="object-fit: cover;" class="rounded-circle bg-white" src="<?= base_url('file_manager/system/admin/') . $admin_data["a_img"]; ?>" title="<?= $admin_data["a_name"] . " " . $admin_data["a_surname"]; ?>" alt="Admin Image">
                            </a>
                        </td>
                        <td>
                            <?= $admin_data["a_name"]; ?>
                        </td>
                        <td><?= $admin_data["a_surname"]; ?></td>
                        <td>
                            <a href="mailto:<?= $admin_data["a_email"]; ?>">
                                <?= $admin_data["a_email"]; ?>
                            </a>
                        </td>
                        <td><?= $admin_data["a_username"]; ?></td>
                        <td>
                            <?php if ($admin_data["a_role"] === "999") : ?>
                                <span class="badge bg-warning p-2 text-uppercase">
                                    <i class="bi bi-star-fill"></i>
                                    Root
                                </span>
                            <?php elseif ($admin_data["a_role"] === "666") : ?>
                                Admin
                            <?php elseif ($admin_data["a_role"] === "333") : ?>
                                Redactor
                            <?php else : ?>
                                <span class="badge bg-danger p-2 text-uppercase">
                                    <i class="bi bi-eyeglasses"></i>
                                    Hacker
                                </span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($admin_data["a_verified"]) : ?>
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
                                <a href="#" class="nav-link disabled theme-info p-0">
                                    <i class="bi bi-eye fs-5"></i>
                                </a>
                                <a href="#" class="nav-link theme-warning p-0 mx-3">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </a>
                                <a href="#" class="nav-link theme-danger p-0" data-link="" data-bs-toggle="modal" data-bs-target="#danger_modal">
                                    <i class=" bi bi-trash fs-5"></i>
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
                    <th>Email</th>
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
                <p class="h5 text-danger">Do you really want to remove the category?</p>
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