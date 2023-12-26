<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>
<div class="section pb_70">
    <div class="container">
        <div class="row">
            <?php if ($contacts_data->information->address->status) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_wrap contact_style1">
                        <div class="contact_icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="contact_text">
                            <span><?= $this->lang->line("address"); ?></span>
                            <a target="_blank" href="https://maps.google.com/?q=<?= htmlentities(base64_decode($contacts_data->information->address->info)); ?>"><?= htmlentities(base64_decode($contacts_data->information->address->info)); ?></a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($contacts_data->information->phone->status) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_wrap contact_style1">
                        <div class="contact_icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="contact_text">
                            <span><?= $this->lang->line("phone"); ?></span>
                            <a href="tel:<?= htmlentities(base64_decode($contacts_data->information->phone->info)); ?>"><?= htmlentities(base64_decode($contacts_data->information->phone->info)); ?></a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($contacts_data->information->mail->status) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_wrap contact_style1">
                        <div class="contact_icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="contact_text">
                            <span><?= $this->lang->line("email_address"); ?></span>
                            <a href="mailto:<?= htmlentities(base64_decode($contacts_data->information->mail->info)); ?>"><?= htmlentities(base64_decode($contacts_data->information->mail->info)); ?></a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if ($contacts_data->information->address->status) : ?>
    <div class="section p-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="map">
                        <?php
                        $address_encode = urlencode(htmlentities(base64_decode($contacts_data->information->address->info)));
                        $google_maps_link = "https://www.google.com/maps?q={$address_encode}&output=embed";
                        ?>
                        <iframe style="filter: invert(90%);" src="<?= $google_maps_link; ?>" width="100%" height="448px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="heading_s1 text-center">
                    <h2><?= $this->lang->line("feedback_title"); ?></h2>
                </div>
                <p class="text-center"><?= $this->lang->line("feedback_description"); ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="field_form">
                    <form action="<?= base_url('feedback-submit'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="feedback_first_name_label">
                                    <?= $this->lang->line("first_name"); ?>
                                    <span class="required">*</span>
                                </label>
                                <input required type="text" name="feedback_first_name" class="form-control" id="feedback_first_name_label" placeholder="<?= $this->lang->line('enter_first_name'); ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="feedback_last_name_label">
                                    <?= $this->lang->line("last_name"); ?>
                                    <span class="required">*</span>
                                </label>
                                <input required type="text" name="feedback_last_name" class="form-control" id="feedback_last_name_label" placeholder="<?= $this->lang->line('enter_last_name'); ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="feedback_email_label">
                                    <?= $this->lang->line("email"); ?>
                                    <span class="required">*</span>
                                </label>
                                <input required type="text" name="feedback_email" class="form-control" id="feedback_email_label" placeholder="<?= $this->lang->line('enter_email'); ?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="feedback_message_label">
                                    <?= $this->lang->line("message"); ?>
                                    <span class="required">*</span>
                                </label>
                                <textarea required name="feedback_message" class="form-control" id="feedback_message_label" rows="4" placeholder="<?= $this->lang->line('enter_message'); ?>"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-default"><?= $this->lang->line("send_message"); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>