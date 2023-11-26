<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-edit border-edit bg-opacity-5">
    <div class="card-header border-edit fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-warning text-header-shadow m-0">
            <i class="bi bi-distribute-vertical me-1"></i>
            Topbar Edit
        </div>
        <div>
            <button type="button" class="btn btn-outline-danger btn-sm rounded-2" data-bs-toggle="modal" data-bs-target="#danger_modal">
                <i class="bi bi-trash me-1"></i>
                Remove
            </button>
            <button type="submit" form="crud_form" class="btn btn-warning btn-sm rounded-2">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
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
        <form action="<?= base_url('admin/about-edit-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" id="crud_form">
            <?php
            $about_short = json_decode($about_data["a_short"], FALSE);
            $about_full = json_decode($about_data["a_full"], FALSE);
            $about_copyright = json_decode($about_data["a_copyright"], FALSE);
            ?>
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
                                <textarea required name="about_short_description_en" class="form-control form-control-sm my-2" id="about_short_description_en_label" rows="3" placeholder="Short Description" style="resize: none;"><?= htmlentities(base64_decode($about_short->en)); ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="about_full_description_en" id="about-editor-en"><?= htmlentities(base64_decode($about_full->en)); ?></textarea>
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
                                <input required name="about_copyright_en" type="text" class="form-control form-control-sm" id="about_copyright_en_label" placeholder="Stimul News" value="<?= htmlentities(base64_decode($about_copyright->en)); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about_menu_ru">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="about_short_description_ru_label">Short Description</label>
                                <textarea required name="about_short_description_ru" class="form-control form-control-sm my-2" id="about_short_description_ru_label" rows="3" placeholder="Short Description" style="resize: none;"><?= htmlentities(base64_decode($about_short->ru)); ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="about_full_description_ru" id="about-editor-ru"><?= htmlentities(base64_decode($about_full->ru)); ?></textarea>
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
                                <input required name="about_copyright_ru" type="text" class="form-control form-control-sm" id="about_copyright_ru" placeholder="Stimul News" value="<?= htmlentities(base64_decode($about_copyright->ru)); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about_menu_az">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="about_short_description_az_label">Short Description</label>
                                <textarea required name="about_short_description_az" class="form-control form-control-sm my-2" id="about_short_description_az_label" rows="3" placeholder="Short Description" style="resize: none;"><?= htmlentities(base64_decode($about_short->az)); ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="about_full_description_az" id="about-editor-az"><?= htmlentities(base64_decode($about_full->az)); ?></textarea>
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
                                <input required name="about_copyright_az" type="text" class="form-control form-control-sm" id="about_copyright_az" placeholder="Stimul News" value="<?= htmlentities(base64_decode($about_copyright->az)); ?>">
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
<div class="modal fade text-center" id="danger_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to remove the about?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/about-delete'); ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>