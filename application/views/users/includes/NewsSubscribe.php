<div class="section background_bg overlay_bg_90 overflow-hidden fixed_bg" data-img-src="<?= base_url('public/user/assets/images/breadcrumb/travel_bg.jpg'); ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="heading_s1 heading_light">
                    <h4><?= $this->lang->line("subscribe_news"); ?></h4>
                </div>
                <p class="text-white mb-md-0">
                    <?= $this->lang->line("subscribe_news_desc"); ?>
                </p>
                <p class="text-warning mb-md-0">
                    *<?= $this->lang->line("sunscribe_news_unsubscribe"); ?>
                </p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="newsletter_form input_tran_white">
                    <form action="<?= base_url('subscribe-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                        <input name="subscriber_email" type="text" class="form-control form-control-sm rounded-input" placeholder="Your email address...">
                        <button type="submit" class="btn btn-default btn-radius btn-sm">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>