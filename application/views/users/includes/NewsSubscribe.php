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
                <?php if ($this->session->flashdata("notify_user")) : ?>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const preLoader = document.querySelector("#preloader");
                            if (preloader) {
                                const mutationObserver = new MutationObserver(function() {
                                    if (window.getComputedStyle(preloader).getPropertyValue("display") === "none") {
                                        mutationObserver.disconnect();
                                        Swal.fire({
                                            title: "<?= htmlentities($this->session->flashdata("notify_user")["header"]); ?>",
                                            text: "<?= htmlentities($this->session->flashdata("notify_user")["message"]); ?>",
                                            icon: "<?= htmlentities($this->session->flashdata("notify_user")["icon"]); ?>",
                                            confirmButtonText: "Okey",
                                            confirmButtonColor: "#FF324D"
                                        });
                                    }
                                });
                                mutationObserver.observe(preLoader, {
                                    attributes: true
                                });
                            }
                        });
                    </script>
                <?php endif; ?>
                <div class="newsletter_form input_tran_white">
                    <form action="<?= base_url('subscribe-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <input name="subscriber_email" type="email" class="form-control form-control-sm rounded-input" placeholder="<?= $this->lang->line("subscriber_placeholder"); ?>">
                        <button type="submit" class="btn btn-default btn-radius btn-sm"><?= $this->lang->line("subscribe"); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>