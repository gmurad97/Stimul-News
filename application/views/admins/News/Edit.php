<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-edit border-edit bg-opacity-5">
    <div class="card-header border-edit fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-warning text-uppercase text-header-shadow m-0">
            <i class="bi bi-newspaper me-1"></i>
            News Edit
        </div>
        <div>
            <a href="<?= base_url('admin/news-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-list-nested me-1"></i>
                List
            </a>
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
        <?php
        $news_id = $news_data["n_uid"];
        $news_info = json_decode($news_data["n_data"]);
        ?>
        <form action="<?= base_url('admin/news-edit-action/') . $news_id; ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="crud_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item mb-3">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <label for="1" class="fw-bold text-warning">Current Preview</label>
                        <a href="<?= base_url('file_manager/news/') . $news_info->news_preview; ?>" class="btn btn-outline-yellow btn-sm rounded-2" data-lity>
                            Show Image
                            <span class="img" style="background-image: url(<?= base_url('file_manager/news/') . $news_info->news_preview; ?>)"></span>
                        </a>
                    </div>
                <li class="list-group ms-4">
                    <div class="row">
                        <h1 class="h5 text-warning my-2">Base Text</h1>
                    </div>
                </li>
                </li>
                <ul class="nav nav-tabs nav-tabs-v2 ps-4">
                    <li class="nav-item me-3">
                        <a href="#news_menu_en" class="nav-link active" data-bs-toggle="tab">EN</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#news_menu_ru" class="nav-link" data-bs-toggle="tab">RU</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#news_menu_az" class="nav-link" data-bs-toggle="tab">AZ</a>
                    </li>
                </ul>
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="news_menu_en">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_en_label" class="d-flex flex-row justify-content-start align-items-center">Title</label>
                                <input required name="news_title_en" type="text" class="form-control form-control-sm my-2" id="news_title_en_label" value="<?= htmlentities(base64_decode($news_info->news_title->en)); ?>" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_en_label">Short Description</label>
                                <textarea required name="news_short_description_en" class="form-control form-control-sm my-2" id="news_short_description_en_label" rows="3" placeholder="Short Description" style="resize: none;"><?= htmlentities(base64_decode($news_info->news_short->en)); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="news-editor-en">Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="news_full_description_en" id="news-editor-en"><?= htmlentities(base64_decode($news_info->news_full->en)); ?></textarea>
                                <script>
                                    CKEDITOR.replace("news-editor-en", {
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
                    </div>
                    <div class="tab-pane" id="news_menu_ru">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_ru_label" class="d-flex flex-row justify-content-start align-items-center">Title</label>
                                <input required name="news_title_ru" type="text" class="form-control form-control-sm my-2" id="news_title_ru_label" value="<?= htmlentities(base64_decode($news_info->news_title->ru)); ?>" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_ru_label">Short Description</label>
                                <textarea required name="news_short_description_ru" class="form-control form-control-sm my-2" id="news_short_description_ru_label" rows="3" placeholder="Short Description" style="resize: none;"><?= htmlentities(base64_decode($news_info->news_short->ru)); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="news-editor-ru">Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="news_full_description_ru" id="news-editor-ru"><?= htmlentities(base64_decode($news_info->news_full->ru)); ?></textarea>
                                <script>
                                    CKEDITOR.replace("news-editor-ru", {
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
                    </div>
                    <div class="tab-pane" id="news_menu_az">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_az_label" class="d-flex flex-row justify-content-start align-items-center">Title</label>
                                <input required name="news_title_az" type="text" class="form-control form-control-sm my-2" id="news_title_az_label" value="<?= htmlentities(base64_decode($news_info->news_title->az)); ?>" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_az_label">Short Description</label>
                                <textarea required name="news_short_description_az" class="form-control form-control-sm my-2" id="news_short_description_az_label" rows="3" placeholder="Short Description" style="resize: none;"><?= htmlentities(base64_decode($news_info->news_short->az)); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="news-editor-az">Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="news_full_description_az" id="news-editor-az"><?= htmlentities(base64_decode($news_info->news_full->az)); ?></textarea>
                                <script>
                                    CKEDITOR.replace("news-editor-az", {
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
                    </div>
                </div>
                <li class="list-group-item">
                    <div class="row">
                        <h1 class="h5 text-warning mt-3">Settings</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="news_category_label">Category</label>
                            <select required name="news_category" class="form-select form-select-sm my-2" id="news_category_label">
                                <?php foreach ($categories_list as $categories_list_item) : ?>
                                    <?php $categories_list_item_info = json_decode($categories_list_item["c_data"]); ?>
                                    <?php if ($categories_list_item_info->category_status) : ?>
                                        <option value="<?= htmlentities(base64_decode($categories_list_item_info->category_name->en)); ?>" <?= $categories_list_item_info->category_name->en == $news_info->news_category->en ? "selected" : ""; ?>><?= htmlentities(base64_decode($categories_list_item_info->category_name->en)); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="news_preview_img_label">
                                Preview
                                <span class="badge bg-dark ms-1">1920x1080</span>
                            </label>
                            <input name="news_preview_img" type="file" class="form-control form-control-sm my-2" id="news_preview_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="news_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="news_status" type="checkbox" class="form-check-input" id="news_status_label" <?= $news_info->news_status ? "checked" : "" ?>>
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