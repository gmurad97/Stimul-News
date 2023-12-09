<div class="section breadcrumb_section background_bg overlay_bg_80 page_title_light" data-img-src="<?= $breadcrumb_data['img_file_name']; ?>">
    <div class="container">
        <div class="row d-flex flex-row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1 class="text-truncate">
                        <?= $breadcrumb_data["page_name"]; ?>
                    </h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">

                    <?php foreach ($breadcrumb_data["segment"] as $breadcrumb_segment_name => $breadcrumb_segment_url) : ?>
                        <li class="breadcrumb-item text-truncate" style="max-width: 256px;">
                            <a href="<?= $breadcrumb_segment_url; ?>"><?= $breadcrumb_segment_name; ?></a>
                        </li>
                    <?php endforeach; ?>









                </ol>
            </div>
        </div>
    </div>
</div>