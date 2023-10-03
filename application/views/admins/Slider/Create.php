<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success m-0">SLIDER CREATE</div>
        <div>
            <a href="<?= base_url('admin/slider-list'); ?>" class="btn btn-outline-info">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>
            <button type="submit" form="slider_form" class="btn btn-outline-success">
                <i class="bi bi-plus-circle me-1"></i>
                Create C SLIDER
            </button>
            <button type="submit" form="slider_form" class="btn btn-outline-success">
                <i class="bi bi-plus-circle me-1"></i>
                Create N SLIDER
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("slider_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('slider_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('slider_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('slider_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('slider_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('slider_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('slider_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>



        <ul class="nav nav-tabs nav-tabs-v2 ps-4 pe-4">
            <li class="nav-item me-3"><a href="#homev2WithCard" class="nav-link active" data-bs-toggle="tab">Custom</a></li>
            <li class="nav-item me-3"><a href="#profilev2WithCard" class="nav-link" data-bs-toggle="tab">News</a></li>
        </ul>



        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="homev2WithCard">
                <form class="" action="<?= base_url('admin/slider-create-action'); ?>" method="POST" enctype="multipart/form-data" id="slider_form">
                    <ul class="list-group list-group-flush mb-3">
                        <h1 class="h5 text-success mb-3">Base Text</h1>
                        <li class="list-group-item">
                            <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                <div class="col-md-3">
                                    <label for="subscriber_email_label">Image</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="slider_custom_img" type="file" class="form-control form-control-sm" id="subscriber_email_label">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                <div class="col-md-3">
                                    <label for="subscriber_email_label">Big text</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="subscriber_email" type="text" class="form-control form-control-sm" id="subscriber_email_label">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                <div class="col-md-3">
                                    <label for="subscriber_email_label">Small text</label>
                                </div>
                                <div class="col-md-9">
                                    <input required name="subscriber_email" type="text" class="form-control form-control-sm" id="subscriber_email_label">
                                </div>
                            </div>
                        </li>
                        <h1 class="h5 text-success my-3">Settings</h1>
                        <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                            <label for="news_status_label">Status</label>
                            <div class="form-check form-switch">
                                <input name="news_status" type="checkbox" class="form-check-input" id="news_status_label">
                            </div>
                        </li>
                        <script src="<?= base_url('public/admin/assets/js/jquery-3.7.1.min.js'); ?>"></script>
                        <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/spectrum/css/spectrum.min.css'); ?>">
                        <script src="<?= base_url('public/admin/assets/plugins/spectrum/js/spectrum.min.js'); ?>"></script>
                        <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                            <label for="category_colorpicker">Big Color</label>
                            <div class="form-check form-switch">
                                <input required name="category_bg_color" type="text" value="#00AA00" class="form-control" id="category_colorpicker">
                            </div>
                        </li>
                        <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                            <label for="category_colorpicker">Small Color</label>
                            <div class="form-check form-switch">
                                <input required name="category_bg_color" type="text" value="#00AA00" class="form-control" id="category_colorpicker2">
                            </div>
                        </li>
                        <script>
                            $('#category_colorpicker').spectrum({
                                "showInput": true
                            });
                            $('#category_colorpicker2').spectrum({
                                "showInput": true
                            });
                        </script>
                        <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                            <label for="news_status_label">Status</label>
                            <div class="form-check form-switch">
                                <input name="news_status" type="checkbox" class="form-check-input" id="news_status_label">
                            </div>
                        </li>
                    </ul>
                </form>
            </div>




            <div class="tab-pane fade" id="profilev2WithCard">

                <form class="" action="<?= base_url('admin/slider-create-action'); ?>" method="POST" enctype="multipart/form-data" id="slider_form">
                    <ul class="list-group list-group-flush mb-3">
                        <h1 class="h5 text-success mb-3">Bas1e Text</h1>
                        <li class="list-group-item">
                            <div class="row d-flex flex-row justify-content-between align-items-center mb-2">
                                <div class="col-md-3">
                                    <label for="subscriber_email_label">Enter news U_ID</label>
                                </div>
                                <div class="col-md-9">
                                    <b id="rikmorty">searcher</b>
                                    <input required name="subscriber_email" type="text" class="form-control form-control-sm" oninput="router(this)" id="subscriber_email_label">
                                    <script>
                                        function router(e) {
                                            let doit = e.value;
                                            if (doit == "") {
                                                doit = 0;
                                            }
                                            let b = document.getElementById('rikmorty');
                                            try {
                                                let x = new XMLHttpRequest();
                                                x.open("GET", "<?= base_url('admin/rik'); ?>/" + doit, false)
                                                x.send();
                                                if (x.statusText == "404") {
                                                    b.innerHTML = "not found news";
                                                }
                                                let z = JSON.parse(x.responseText);
                                                b.innerHTML = z["news_title"]["en"];
                                            } catch {
                                                b.innerHTML = "not found news";
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </li>
                        <h1 class="h5 text-success my-3">Settings</h1>
                        <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                            <label for="news_status_label">Status</label>
                            <div class="form-check form-switch">
                                <input name="news_status" type="checkbox" class="form-check-input" id="news_status_label">
                            </div>
                        </li>
                    </ul>
                </form>

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