<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>


<?php
$about_short = json_decode($about_data["a_short"], TRUE);
$about_full = json_decode($about_data["a_full"], TRUE);
$about_copyright = json_decode($about_data["a_copyright"], TRUE);
?>
<!-- START ABOUT US -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php echo base64_decode($about_full[$this->session->userdata("site_lang")]); ?>
            </div>
        </div>
    </div>
</div>
<!-- END ABOUT US -->

<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>