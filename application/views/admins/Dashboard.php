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
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1 text-info text-uppercase">
                        Feedback List
                    </span>
                    <span>
                        <button type="button" class="btn btn-outline-danger btn-sm rounded-2 fw-bold" data-bs-toggle="modal" data-bs-target="#danger_modal_feedbacks_clear">
                            <i class="bi bi-trash me-1 fs-5"></i>
                            Clear All Feedback
                        </button>
                    </span>
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
                                        <td class="text-truncate" style="max-width: 80px;">
                                            <?= $feedback_data_item["f_first_name"]; ?>
                                        </td>
                                        <td class="text-truncate" style="max-width: 80px;">
                                            <?= $feedback_data_item["f_last_name"]; ?>
                                        </td>
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
                                                <a href="<?= base_url('admin/feedback-detail/' . $feedback_data_item["f_uid"]); ?>" class="nav-link theme-info p-0">
                                                    <i class="bi bi-eye fs-5"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="nav-link disabled theme-warning p-0 mx-3">
                                                    <i class="bi bi-pencil-square fs-5"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="nav-link theme-danger p-0" data-link="<?= base_url('admin/feedback-delete/' . $feedback_data_item["f_uid"]); ?>" data-bs-toggle="modal" data-bs-target="#danger_modal_feedback_delete">
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
<div class="modal fade text-center" id="danger_modal_feedbacks_clear">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to clear the feedbacks?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/feedback-clear'); ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade text-center" id="danger_modal_feedback_delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to delete the feedback?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="javascript:void(0);" class="btn btn-outline-danger" id="danger_modal_feedback_link">Remove</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("focus", "[data-link]", function() {
        var link = $(this).data("link");
        $("#danger_modal_feedback_link").attr("href", link);
    });
</script>
<?php $this->load->view("admins/includes/FooterScripts"); ?>