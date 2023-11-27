<div class="section breadcrumb_section background_bg overlay_bg_80 page_title_light" data-img-src="<?= str_contains($this->uri->uri_string(), 'category') ? base_url('file_manager/categories/' . $breadcrumb_data["img_file_name"]) : base_url('public/user/assets/images/breadcrumb/newsletters_bg.jpg'); ?>">
    <div class="container">
        <div class="row d-flex flex-row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1><?= isset($breadcrumb_data["page_name"]) ? htmlentities(base64_decode($breadcrumb_data["page_name"][$this->session->userdata("site_lang")])) : $this->lang->line("all_news"); ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <?php $combine_segment = base_url(); ?>
                    <?php foreach ($this->uri->segment_array() as $current_index => $current_segment) : ?>
                        <?php $combine_segment .= ($current_index === 1) ? $current_segment : "/" . $current_segment; ?>
                        <li class="breadcrumb-item">
                            <a href="<?= $combine_segment; ?>"><?= !is_numeric($current_segment) ? ucfirst($current_segment) : "Page #" . ucfirst($current_segment); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</div>