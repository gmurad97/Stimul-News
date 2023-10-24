<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<?php
$slider_id = $slider_data["s_uid"];
$slider_info = json_decode($slider_data["s_data"], FALSE);
$s_type = $slider_info->slider_type == "slider_news" ? TRUE : FALSE;
?>

<div class="card bg-edit border-edit bg-opacity-5">
    <div class="card-header border-edit fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning text-uppercase text-header-shadow m-0">
            <i class="bi bi-bezier"></i>
            Slider Edit
        </div>
        <div>
            <a href="<?= base_url('admin/slider-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>

            <?php if ($s_type == FALSE) : ?>
                <button type="submit" form="slider_custom_form" class="btn btn-warning btn-sm rounded-2">
                    <i class="bi bi-pencil-square me-1"></i>
                    Edit Custom
                </button>
            <?php else : ?>
                <button type="submit" form="slider_news_form" class="btn btn-warning btn-sm rounded-2">
                    <i class="bi bi-pencil-square me-1"></i>
                    Edit News
                </button>
            <?php endif; ?>
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
        <ul class="nav nav-tabs nav-tabs-v2 ps-4 pe-4">
            <?php if ($s_type == FALSE) : ?>
                <li class="nav-item me-3"><a href="#slider_custom" class="nav-link" data-bs-toggle="tab">Custom Form</a></li>
            <?php else : ?>
                <li class="nav-item me-3"><a href="#slider_news" class="nav-link" data-bs-toggle="tab">News Form</a></li>
            <?php endif; ?>
        </ul>
        <div class="tab-content p-4">
            <?php if ($s_type == FALSE) : ?>
                <div class="tab-pane fade show active" id="slider_custom">
                    <form action="<?= base_url('admin/slider-custom-create-action'); ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="slider_custom_form">
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                <div class="row">
                                    <h1 class="h5 text-success mb-3">Base Text</h1>
                                </div>
                                <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                    <div class="col-md-3">
                                        <label for="slider_custom_img_label">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input required name="slider_custom_img" type="file" class="form-control form-control-sm" id="slider_custom_img_label">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                    <div class="col-md-3">
                                        <label for="slider_custom_large_text_label">Large text</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="slider_custom_large_text" type="text" class="form-control form-control-sm" id="slider_custom_large_text_label">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                    <div class="col-md-3">
                                        <label for="slider_custom_small_text_label">Small text</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="slider_custom_small_text" type="text" class="form-control form-control-sm" id="slider_custom_small_text_label">
                                    </div>
                                </div>
                            </li>
                            <script src="<?= base_url('public/admin/assets/js/jquery-3.7.1.min.js'); ?>"></script>
                            <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/spectrum/css/spectrum.min.css'); ?>">
                            <script src="<?= base_url('public/admin/assets/plugins/spectrum/js/spectrum.min.js'); ?>"></script>
                            <li class="list-group-item">
                                <div class="row">
                                    <h1 class="h5 text-success my-3">Settings</h1>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <label for="slider_custom_large_text_color_label">Larger Text Color</label>
                                    <div class="form-check form-switch">
                                        <input required name="slider_custom_large_text_color" type="text" value="#00AA00" class="form-control" id="slider_custom_large_text_color_label">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                                <label for="slider_custom_small_text_color_label">Small Text Color</label>
                                <div class="form-check form-switch">
                                    <input required name="slider_custom_small_text_color" type="text" value="#00AA00" class="form-control" id="slider_custom_small_text_color_label">
                                </div>
                            </li>
                            <script>
                                $('#slider_custom_large_text_color_label').spectrum({
                                    "showInput": true
                                });
                                $('#slider_custom_small_text_color_label').spectrum({
                                    "showInput": true
                                });
                            </script>
                            <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                                <label for="slider_custom_status_label">Status</label>
                                <div class="form-check form-switch">
                                    <input name="slider_custom_status" type="checkbox" class="form-check-input" id="slider_custom_status_label">
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            <?php else : ?>
                <div class="tab-pane fade show active" id="slider_news">
                    <form action="<?= base_url('admin/slider-news-create-action'); ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="slider_news_form">
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                <div class="row">
                                    <h1 class="h5 text-success mb-3">News Data</h1>
                                </div>
                                <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                    <div class="col-md-3">
                                        <label for="slider_news_uid_label">News UID</label>
                                    </div>
                                    <div class="col-md-9">
                                        <b id="news_b_title">News Title: Example</b>
                                        <input required name="slider_news_uid" type="number" class="form-control form-control-sm" oninput="searchNews(this);" id="slider_news_uid_label">
                                        <script>
                                            function searchNews(e) {
                                                let uid = e.value;
                                                if (!uid) {
                                                    uid = 0;
                                                }
                                                let outputDoc = document.querySelector("#news_b_title");
                                                let resp = fetch("<?= base_url('admin/api/get-news-uid/'); ?>" + uid + "/title", {
                                                    method: "GET"
                                                }).then((response) => {
                                                    return response.text();
                                                }).then((resolve) => {
                                                    if (!(resolve == (-1))) {
                                                        outputDoc.innerHTML = "News Title: " + JSON.parse(resolve).title;
                                                    } else {
                                                        outputDoc.innerHTML = "News Title: Not Found!";
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <h1 class="h5 text-success my-3">Settings</h1>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <label for="slider_news_status_label">Status</label>
                                    <div class="form-check form-switch">
                                        <input name="slider_news_status" type="checkbox" class="form-check-input" id="slider_news_status_label">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>

                </div>
            <?php endif; ?>
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