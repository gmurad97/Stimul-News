<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success m-0">NEWS CREATE</div>
        <div>
            <a href="<?= base_url('admin/news-list'); ?>" class="btn btn-outline-info">
                <i class="bi bi-list-nested me-1"></i>
                News List
            </a>
            <button type="submit" form="news_form" class="btn btn-outline-success">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("news_alert")) : ?>
            <div class="alert alert-<?= $this->session->flashdata('news_alert')['alert_type']; ?> alert-dismissable fade show p-3" style="<?= $this->session->flashdata('news_alert')['alert_bg_color']; ?>">
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">
                    <i class="<?= $this->session->flashdata('news_alert')['alert_icon']; ?> me-2"></i>
                    <?= $this->session->flashdata('news_alert')['alert_heading_message']; ?>
                </h4>
                <hr>
                <p class="mb-0">
                    <strong class="fw-bold"><?= $this->session->flashdata('news_alert')['alert_short_message']; ?> </strong>
                    <?= $this->session->flashdata('news_alert')['alert_long_message']; ?>
                </p>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('admin/news-create-action'); ?>" method="POST" enctype="multipart/form-data" id="news_form">
            <ul class="list-group list-group-flush mb-3">
                <h1 class="h5 text-success mb-3">Base Text</h1>
                <ul class="nav nav-tabs nav-tabs-v2 ps-4">
                    <li class="nav-item me-3">
                        <a href="#news_menu_en" class="nav-link active" data-bs-toggle="tab">
                            News-EN
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#news_menu_ru" class="nav-link" data-bs-toggle="tab">
                            News-RU
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#news_menu_az" class="nav-link" data-bs-toggle="tab">
                            News-AZ
                        </a>
                    </li>
                </ul>
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="news_menu_en">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_label" class="d-flex flex-row justify-content-start align-items-center">
                                    Title
                                    <span class="badge bg-dark ms-1">Max Length - 40</span>
                                </label>
                                <input required name="news_title_en" type="text" class="form-control form-control-sm my-2" id="news_title_label" maxlength="40" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_label">
                                    Short Description
                                    <span class="badge bg-dark ms-1">Max Length - 118</span>
                                </label>
                                <input required name="news_short_description_en" type="text" class="form-control form-control-sm my-2" id="news_short_description_label" maxlength="118" placeholder="Short Description">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="news_full_description_en" id="news-editor-en"></textarea>
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
                                <label for="news_title_label" class="d-flex flex-row justify-content-start align-items-center">
                                    Title
                                    <span class="badge bg-dark ms-1">Max Length - 40</span>
                                </label>
                                <input required name="news_title_ru" type="text" class="form-control form-control-sm my-2" id="news_title_label" maxlength="40" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_label">
                                    Short Description
                                    <span class="badge bg-dark ms-1">Max Length - 118</span>
                                </label>
                                <input required name="news_short_description_ru" type="text" class="form-control form-control-sm my-2" id="news_short_description_label" maxlength="118" placeholder="Short Description">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="news_full_description_ru" id="news-editor-ru"></textarea>
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
                                <label for="news_title_label" class="d-flex flex-row justify-content-start align-items-center">
                                    Title
                                    <span class="badge bg-dark ms-1">Max Length - 40</span>
                                </label>
                                <input required name="news_title_az" type="text" class="form-control form-control-sm my-2" id="news_title_label" maxlength="40" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_label">
                                    Short Description
                                    <span class="badge bg-dark ms-1">Max Length - 118</span>
                                </label>
                                <input required name="news_short_description_az" type="text" class="form-control form-control-sm my-2" id="news_short_description_label" maxlength="118" placeholder="Short Description">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Full Description</label>
                                <script src="<?= base_url('public/admin/assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
                                <textarea required name="news_full_description_az" id="news-editor-az"></textarea>
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
                <h1 class="h5 text-success mt-3">Settings</h1>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="news_category_label">Category</label>
                            <select required name="news_category" class="form-select form-select-sm my-2" id="news_category_label">
                                <?php foreach ($categories_list as $categories_list_item) : ?>
                                    <?php $categories_list_item_info = json_decode($categories_list_item["c_data"]); ?>
                                    <?php if ($categories_list_item_info->category_status) : ?>
                                        <option value="<?= $categories_list_item_info->category_name->en; ?>"><?= $categories_list_item_info->category_name->en; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="news_preview_img_label">
                                Preview
                                <span class="badge bg-dark ms-1">1920x1080</span>
                            </label>
                            <input required name="news_preview_img" type="file" class="form-control form-control-sm my-2" id="news_preview_img_label">
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="news_status_label">Status</label>
                    <div class="form-check form-switch">
                        <input name="news_status" type="checkbox" class="form-check-input" id="news_status_label">
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