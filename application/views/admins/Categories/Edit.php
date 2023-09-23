<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning m-0">СATEGORIES EDIT</div>
        <div>
            <a href="<?= base_url('categories-list'); ?>" class="btn btn-outline-info">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>
            <button type="submit" form="categories_form" class="btn btn-outline-warning">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("categories_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('categories_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('categories_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('categories_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('categories_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('categories_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('categories_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <?php
        $category_id = $category_data["c_uid"];
        $category_info = json_decode($category_data["c_data"]);
        ?>
        <form action="<?= base_url('admin/categories-edit-action/') . $category_id; ?>" method="POST" enctype="multipart/form-data" id="categories_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label class="fw-bold text-warning">Current Image</label>
                        <a href="<?= base_url('file_manager/categories/') . $category_info->category_img; ?>" class="btn btn-outline-yellow" data-lity>
                            Show Image
                            <span class="img" style="background-image: url(<?= base_url('file_manager/categories/') . $category_info->category_img; ?>)"></span>
                        </a>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row d-flex flex-row justify-content-between align-items-center">
                        <div class="col-md-3">
                            <label for="category_img_label">Breadcrumb Image</label>
                        </div>
                        <div class="col-md-9">
                            <input name="category_img" type="file" class="form-control form-control-sm" id="category_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <ul class="nav nav-tabs nav-tabs-v2">
                        <li class="nav-item me-3">
                            <a href="#tabs_category_en_name" class="nav-link active" data-bs-toggle="tab">
                                Name - EN
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#tabs_category_ru_name" class="nav-link" data-bs-toggle="tab">
                                Name - RU
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#tabs_category_az_name" class="nav-link" data-bs-toggle="tab">
                                Name - AZ
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane show active" id="tabs_category_en_name">
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-3">
                                    <label for="category_en_name_label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="category_en_name" type="text" class="form-control form-control-sm" id="category_en_name_label" placeholder="Business" value="<?= $category_info->category_name->en; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show" id="tabs_category_ru_name">
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-3">
                                    <label for="category_name_ru_label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="category_ru_name" type="text" class="form-control form-control-sm" id="category_name_ru_label" placeholder="Бизнес" value="<?= $category_info->category_name->ru; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show" id="tabs_category_az_name">
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-3">
                                    <label for="category_az_name_label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="category_az_name" type="text" class="form-control form-control-sm" id="category_az_name_label" placeholder="Biznes" value="<?= $category_info->category_name->az; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="category_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="category_status" type="checkbox" class="form-check-input" id="category_status_label" <?= $category_info->category_status ? "checked" : "" ?>>
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