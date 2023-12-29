<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-list border-list bg-opacity-5">
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-info text-uppercase text-header-shadow m-0">
            <i class="fa-solid fa-people-group me-1"></i>
            Slider List
        </div>
        <div>
            <a href="<?= base_url('admin/slider-create'); ?>" class="btn btn-success btn-sm rounded-2">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </a>
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
        <table class="table table-hover text-nowrap w-100" id="slider-datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($slider_results)) : ?>
                    <?php
                    $id_counter = 1;
                    foreach ($slider_results as $slider_item) :
                        $slider_id = $slider_item["s_uid"];
                        $slider_item_data = json_decode($slider_item["s_data"], FALSE);
                    ?>
                        <tr>
                            <td><?= $id_counter++; ?></td>
                            <td>
                                <?php if ($slider_item_data->slider_type == "slider_custom") : ?>
                                    <i class="bi bi-cc-square text-indigo"></i>
                                    Custom Slider
                                <?php else : ?>
                                    <i class="bi bi-newspaper text-indigo"></i>
                                    News Slider
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($slider_item["s_status"]) : ?>
                                    <span class="badge bg-success p-2 w-75px text-uppercase">Active</span>
                                <?php else : ?>
                                    <span class="badge bg-danger p-2 w-75px text-uppercase">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <nav class="nav flex-row">
                                    <a href="javascript:void(0);" class="nav-link disabled theme-info p-0">
                                        <i class="bi bi-eye fs-5"></i>
                                    </a>
                                    <a href="<?= base_url('admin/slider-edit/') . $slider_id; ?>" class="nav-link theme-warning p-0 mx-3">
                                        <i class="bi bi-pencil-square fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link theme-danger p-0" data-link="<?= base_url('admin/slider-delete/') . $slider_id; ?>" data-bs-toggle="modal" data-bs-target="#danger_modal">
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
                    <th>Subscriber</th>
                    <th>Status</th>
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
            $("#subscribers-datatable").DataTable({
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
    <div class="card-footer border-list fw-bold d-flex flex-row justify-content-start align-items-center">
        <div>
            <a href="<?= base_url('admin/slider-create'); ?>" class="btn btn-success btn-sm rounded-2">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </a>
        </div>
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
                <p class="h5 text-danger">Do you really want to remove the slider?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="javascript:void(0);" class="btn btn-outline-danger" id="danger_modal_link">Remove</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("focus", "[data-link]", function() {
        var link = $(this).data("link");
        $("#danger_modal_link").attr("href", link);
    });
</script>
<?php $this->load->view("admins/includes/FooterScripts"); ?>