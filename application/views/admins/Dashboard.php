<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card bg-theme border-theme bg-opacity-10 mb-3">
            <div class="card-body">
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1 text-success text-uppercase">Fiat price - USD</span>
                </div>
                <div class="small text-inverse text-opacity-50 text-truncate">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pairs</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fiat_price as $fiat_item_symbol => $fiat_item_price) : ?>
                                <tr>
                                    <td><?= $fiat_item_symbol; ?></td>
                                    <td><?= $fiat_item_price; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-theme border-theme bg-opacity-10 mb-3">
            <div class="card-body">
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1 text-success text-uppercase">Cryptocurrency Price</span>
                </div>
                <div class="small text-inverse text-opacity-50 text-truncate">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pairs</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($crypto_price as $crypto_item_price) : ?>
                                <tr>
                                    <td><?= $crypto_item_price->symbol; ?></td>
                                    <td><?= round((float)$crypto_item_price->price, 3); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card bg-list border-list bg-opacity-5 mb-3">
            <div class="card-body">
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1 text-info text-uppercase">Feedback List</span>
                </div>
                <div class="text-opacity-50 text-truncate">
                    <table class="table table-hover text-nowrap w-100" id="feedback-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($feedback_data)) : ?>
                                <?php
                                $id_counter = 1;
                                foreach ($feedback_data as $feedback_data_item) :
                                ?>
                                    <tr>
                                        <td><?= $id_counter++; ?></td>

                                        <td><?= $feedback_data_item["f_first_name"]; ?></td>

                                        <td><?= $feedback_data_item["f_last_name"]; ?></td>

                                        <td>
                                            <div class="dflex flex-row">
                                                <i class="bi bi-calendar text-success"></i>
                                                <?= $feedback_data_item["f_date"]; ?>
                                                <i class="bi bi-clock text-success ms-2"></i>
                                                <?= $feedback_data_item["f_time"]; ?>
                                            </div>
                                        </td>


                                        <td>
                                            <nav class="nav flex-row">
                                                <a href="javascript:void(0);" class="nav-link disabled theme-info p-0">
                                                    <i class="bi bi-eye fs-5"></i>
                                                </a>
                                                <a href="<?= base_url('admin/partners-edit/') . $partners_data_item["p_uid"]; ?>" class="nav-link theme-warning p-0 mx-3">
                                                    <i class="bi bi-pencil-square fs-5"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="nav-link theme-danger p-0" data-link="<?= base_url('admin/partners-delete/') . $partners_data_item["p_uid"]; ?>" data-bs-toggle="modal" data-bs-target="#danger_modal">
                                                    <i class=" bi bi-trash fs-5"></i>
                                                </a>
                                            </nav>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>








                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date</th>
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
                        $("#feedback-datatable").DataTable({
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
            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>