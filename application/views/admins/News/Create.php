<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success text-uppercase text-header-shadow m-0">
            <i class="bi bi-newspaper me-1"></i>
            News Create
        </div>
        <div>
            <a href="<?= base_url('admin/news-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-list-nested me-1"></i>
                News List
            </a>
            <button type="submit" form="crud_form" class="btn btn-success btn-sm rounded-2">
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
        <form action="<?= base_url('admin/news-create-action'); ?>" method="POST" enctype="multipart/form-data" class="was-validated" id="crud_form">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group ms-4">
                    <div class="row">
                        <h1 class="h5 text-success my-2">Base Text</h1>
                    </div>
                </li>
                <ul class="nav nav-tabs nav-tabs-v2 ps-4">
                    <li class="nav-item me-3">
                        <a href="#news_menu_en" class="nav-link active" data-bs-toggle="tab">
                            EN
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#news_menu_ru" class="nav-link" data-bs-toggle="tab">
                            RU
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#news_menu_az" class="nav-link" data-bs-toggle="tab">
                            AZ
                        </a>
                    </li>
                </ul>
                <div class="tab-content p-4">
                    <div class="tab-pane fade show active" id="news_menu_en">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_en_label" class="d-flex flex-row justify-content-start align-items-center">Title</label>
                                <input required name="news_title_en" type="text" class="form-control form-control-sm my-2" id="news_title_en_label" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_en_label">Short Description</label>
                                <textarea required name="news_short_description_en" class="form-control form-control-sm my-2" id="news_short_description_en_label" rows="3" placeholder="Short Description" style="resize: none;"></textarea>
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
                    <div class="tab-pane fade" id="news_menu_ru">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_ru_label" class="d-flex flex-row justify-content-start align-items-center">Title</label>
                                <input required name="news_title_ru" type="text" class="form-control form-control-sm my-2" id="news_title_ru_label" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_ru_label">Short Description</label>
                                <textarea required name="news_short_description_ru" class="form-control form-control-sm my-2" id="news_short_description_ru_label" rows="3" placeholder="Short Description" style="resize: none;"></textarea>
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
                    <div class="tab-pane fade" id="news_menu_az">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_title_az_label" class="d-flex flex-row justify-content-start align-items-center">Title</label>
                                <input required name="news_title_az" type="text" class="form-control form-control-sm my-2" id="news_title_az_label" placeholder="News Title">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="news_short_description_az_label">Short Description</label>
                                <textarea required name="news_short_description_az" class="form-control form-control-sm my-2" id="news_short_description_az_label" rows="3" placeholder="Short Description" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="news-editor-az">Full Description</label>
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
                <li class="list-group-item">
                    <div class="row">
                        <h1 class="h5 text-success mb-3">Settings</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="news_category_label">Category</label>
                            <select required name="news_category" class="form-select form-select-sm my-2" id="news_category_label">
                                <?php if (!empty($categories_list)) : ?>
                                    <?php foreach ($categories_list as $categories_list_item) : ?>
                                        <?php $category_name = json_decode($categories_list_item["c_name"], FALSE); ?>
                                        <?php if ($categories_list_item["c_status"]) : ?>
                                            <option value="<?= htmlentities(base64_decode($category_name->en)); ?>"><?= htmlentities(base64_decode($category_name->en)); ?></option>
                                        <?php else : ?>
                                            <option disabled value="<?= htmlentities(base64_decode($category_name->en)); ?>"><?= htmlentities(base64_decode($category_name->en)); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
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
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <label for="notify_subscribers_label" class="text-red fw-bold">Notify Subscribers?</label>
                    <div class="form-check form-switch">
                        <input name="notify_subscribers" type="checkbox" class="form-check-input" id="notify_subscribers_label">
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div class="card-footer border-create fw-bold d-flex flex-row justify-content-start align-items-center">
        <div>
            <button type="submit" form="crud_form" class="btn btn-success btn-sm rounded-2">
                <i class="bi bi-plus-circle me-1"></i>
                Create
            </button>
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