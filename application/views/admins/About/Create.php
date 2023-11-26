<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-success text-header-shadow m-0">
            <i class="fa-regular fa-address-card me-1"></i>
            About Create
        </div>
        <div>
            <button type="submit" form="crud_form" class="btn btn-sm btn-success rounded-2">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </button>
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
        <form action="<?= base_url('admin/about-create-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" id="crud_form">
            <ul class="list-group list-group-flush mb-3">
                <ul class="nav nav-tabs nav-tabs-v2 ps-4">
                    <li class="nav-item me-3">
                        <a href="#about_menu_en" class="nav-link active" data-bs-toggle="tab">
                            EN
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#about_menu_ru" class="nav-link" data-bs-toggle="tab">
                            RU
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#about_menu_az" class="nav-link" data-bs-toggle="tab">
                            AZ
                        </a>
                    </li>
                </ul>
                <div class="tab-content p-4">
                    <div class="tab-pane fade show active" id="about_menu_en">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="about_short_description_en_label">Short Description</label>
                                <textarea required name="about_short_description_en" class="form-control form-control-sm my-2" id="about_short_description_en_label" rows="3" placeholder="Short Description" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="about_full_description_en" id="about-editor-en"></textarea>
                                <script>
                                    CKEDITOR.replace("about-editor-en", {
                                        on: {
                                            instanceReady: function(e) {
                                                let editorElement = e.editor.container.$;
                                                editorElement.style.marginTop = "0.5rem";
                                                editorElement.style.marginBottom = "0.5rem";
                                                editorElement.style.boxShadow = "none";
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="about_copyright_en_label" class="mb-2">Copyright</label>
                                <input required name="about_copyright_en" type="text" class="form-control form-control-sm" id="about_copyright_en_label" placeholder="Stimul News">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about_menu_ru">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="about_short_description_ru_label">Short Description</label>
                                <textarea required name="about_short_description_ru" class="form-control form-control-sm my-2" id="about_short_description_ru_label" rows="3" placeholder="Short Description" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="about_full_description_ru" id="about-editor-ru"></textarea>
                                <script>
                                    CKEDITOR.replace("about-editor-ru", {
                                        on: {
                                            instanceReady: function(e) {
                                                let editorElement = e.editor.container.$;
                                                editorElement.style.marginTop = "0.5rem";
                                                editorElement.style.marginBottom = "0.5rem";
                                                editorElement.style.boxShadow = "none";
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="about_copyright_ru_label" class="mb-2">Copyright</label>
                                <input required name="about_copyright_ru" type="text" class="form-control form-control-sm" id="about_copyright_ru" placeholder="Stimul News">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about_menu_az">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="about_short_description_az_label">Short Description</label>
                                <textarea required name="about_short_description_az" class="form-control form-control-sm my-2" id="about_short_description_az_label" rows="3" placeholder="Short Description" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="about_full_description_az" id="about-editor-az"></textarea>
                                <script>
                                    CKEDITOR.replace("about-editor-az", {
                                        on: {
                                            instanceReady: function(e) {
                                                let editorElement = e.editor.container.$;
                                                editorElement.style.marginTop = "0.5rem";
                                                editorElement.style.marginBottom = "0.5rem";
                                                editorElement.style.boxShadow = "none";
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="about_copyright_az_label" class="mb-2">Copyright</label>
                                <input required name="about_copyright_az" type="text" class="form-control form-control-sm" id="about_copyright_az" placeholder="Stimul News">
                            </div>
                        </div>
                    </div>
                </div>
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