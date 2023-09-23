<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card">
    <div class="card-header fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-success m-0">NEWS CREATE</div>
        <div>
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



                <li class="list-group-item">
                    <label for="news_title_label">Title</label>
                    <input required name="news_title" type="text" class="form-control form-control-sm my-2" id="news_title_label" placeholder="News Title">
                </li>

                <li class="list-group-item">
                    <label for="news_short_description_label">Short Description</label>
                    <textarea required rows="3" name="news_short_description" class="form-control my-2" id="news_short_description_label"></textarea>
                </li>




                <li class="list-group-item">
                    <label for="news_title_label">Title</label>
                    <input required name="news_title" type="text" class="form-control form-control-sm mt-2" id="news_title_label" placeholder="Busines crashes">
                </li>




                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="news_title_label">Title</label>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="news_title_label">Title</label>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </li>


                <style>
                    .cke_contents {
                        background-color: rgba(255, 0, 255, 0.5);
                    }
                </style>
                <li class="list-group-item d-flex flex-column">
                    <label for="news_title_label">Title</label>

                    <!-- Подключение библиотеки CKEditor 4 из CDN -->
                    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
                    <!-- Элемент, который будет заменен редактором CKEditor 4 -->
                    <textarea id="ckeditor-editor"></textarea>

                    <script>
                        // Инициализация редактора CKEditor 4
                        CKEDITOR.replace('ckeditor-editor');
                    </script>
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