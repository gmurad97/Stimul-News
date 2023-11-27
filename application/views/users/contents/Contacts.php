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
<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>