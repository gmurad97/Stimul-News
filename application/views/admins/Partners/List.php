<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success m-0">PARTNERS</div>
        <div>
            <button type="submit" form="partners_form" class="btn btn-outline-success">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover text-nowrap w-100" id="partners-datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Partner Image</th>
                    <th>Partner Link</th>
                    <th>Partner Title</th>
                    <th>Partner Status</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id_counter = 1;
                foreach ($partners_data as $partners_data_item_encoded) :
                    $partners_data_item_decoded = json_decode($partners_data_item_encoded["p_options"]);
                ?>
                    <tr>
                        <td><?= $id_counter++; ?></td>
                        <td>
                            <img width="128" src="<?= base_url('file_manager/partners/') . $partners_data_item_decoded->partner_img; ?>" title="<?= $partners_data_item_decoded->partner_title; ?>" alt="<?= $partners_data_item_decoded->partner_title; ?>">
                        </td>
                        <td><?= $partners_data_item_decoded->partner_link; ?></td>
                        <td><?= $partners_data_item_decoded->partner_title; ?></td>
                        <td>
                            <?php if ($partners_data_item_decoded->partner_status) : ?>
                                <span class="badge bg-success p-2">Active</span>
                            <?php endif; ?>
                            <?php if (!$partners_data_item_decoded->partner_status) : ?>
                                <span class="badge bg-danger p-2">Deactive</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <nav class="nav flex-row justify-content-between">
                                <a href="#" class="nav-link theme-info p-0">
                                    <i class="bi bi-eye fs-5"></i>
                                </a>
                                <a href="#" class="nav-link theme-warning p-0">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </a>
                                <a href="#" class="nav-link theme-danger p-0">
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
                    <th>Partner Image</th>
                    <th>Partner Link</th>
                    <th>Partner Title</th>
                    <th>Partner Status</th>
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
            $("#partners-datatable").DataTable({
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

<?php $this->load->view("admins/includes/FooterScripts"); ?>