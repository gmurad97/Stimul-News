<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-list border-list bg-opacity-5">
    <?php
    $news_id = $news_data["n_uid"];
    $news_info = json_decode($news_data["n_data"]);
    ?>
    <div class="card-header border-list fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-info text-uppercase text-header-shadow m-0">
            <i class="bi bi-newspaper me-1"></i>
            News Detail
        </div>
        <div>
            <a href="<?= base_url('admin/news-list'); ?>" class="btn btn-outline-info btn-sm rounded-2">
                <i class="bi bi-list-nested me-1"></i>
                News List
            </a>
            <a href="<?= base_url('admin/news-edit/') . $news_id; ?>" class="btn btn-outline-warning btn-sm rounded-2">
                <i class="bi bi-pencil-square me-1"></i>
                Edit
            </a>
            <button type="button" class="btn btn-danger btn-sm rounded-2" data-bs-toggle="modal" data-bs-target="#danger_modal">
                <i class="bi bi-trash me-1"></i>
                Remove
            </button>
        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-v2">
            <li class="nav-item me-3">
                <a href="#news_detail_en" class="nav-link active" data-bs-toggle="tab">
                    EN
                </a>
            </li>
            <li class="nav-item me-3">
                <a href="#news_detail_ru" class="nav-link" data-bs-toggle="tab">
                    RU
                </a>
            </li>
            <li class="nav-item me-3">
                <a href="#news_detail_az" class="nav-link" data-bs-toggle="tab">
                    AZ
                </a>
            </li>
        </ul>
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="news_detail_en">
                <div class="card-body">
                    <h1 class="h5 text-info">Short Preview</h1>
                    <div class="row gx-0 align-items-center">
                        <div class="col-md-5">
                            <img width="100%" class="rounded" src="<?= base_url('file_manager/news/') . $news_info->news_preview; ?>" alt="News Preview">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><?= base64_decode($news_info->news_title->en); ?></h5>
                                <p class="card-text"><?= base64_decode($news_info->news_short->en); ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Date: <?= $news_info->news_created_date . " " . $news_info->news_created_time; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-5">
                        <h1 class="h5 text-success">Base Text</h1>
                        <div class="card bg-list border-list bg-opacity-10 mb-3">
                            <div class="card-body">
                                <p class="card-text text-inverse text-opacity-75">
                                    <?= base64_decode($news_info->news_full->en); ?>
                                </p>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="news_detail_ru">
                <div class="card-body">
                    <h1 class="h5 text-info">Short Preview</h1>
                    <div class="row gx-0 align-items-center">
                        <div class="col-md-5">
                            <img width="100%" class="rounded" src="<?= base_url('file_manager/news/') . $news_info->news_preview; ?>" alt="News Preview">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><?= base64_decode($news_info->news_title->ru); ?></h5>
                                <p class="card-text"><?= base64_decode($news_info->news_short->ru); ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Date: <?= $news_info->news_created_date . " " . $news_info->news_created_time; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-5">
                        <h1 class="h5 text-success">Base Text</h1>
                        <div class="card bg-list border-list bg-opacity-10 mb-3">
                            <div class="card-body">
                                <p class="card-text text-inverse text-opacity-75">
                                    <?= base64_decode($news_info->news_full->ru); ?>
                                </p>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="news_detail_az">
                <div class="card-body">
                    <h1 class="h5 text-info">Short Preview</h1>
                    <div class="row gx-0 align-items-center">
                        <div class="col-md-5">
                            <img width="100%" class="rounded" src="<?= base_url('file_manager/news/') . $news_info->news_preview; ?>" alt="News Preview">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><?= base64_decode($news_info->news_title->az); ?></h5>
                                <p class="card-text"><?= base64_decode($news_info->news_short->az); ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Date: <?= $news_info->news_created_date . " " . $news_info->news_created_time; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-5">
                        <h1 class="h5 text-success">Base Text</h1>
                        <div class="card bg-list border-list bg-opacity-10 mb-3">
                            <div class="card-body">
                                <p class="card-text text-inverse text-opacity-75">
                                    <?= base64_decode($news_info->news_full->az); ?>
                                </p>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
<div class="modal fade text-center" id="danger_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content rounded">
            <div class="modal-body py-3">
                <p class="h5 text-danger">Do you really want to remove the news?</p>
            </div>
            <div class="modal-footer py-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/news-delete/') . $news_id; ?>" class="btn btn-outline-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>