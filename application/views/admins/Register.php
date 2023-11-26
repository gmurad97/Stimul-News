<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stimul News CMS - <?= $admin_page_name; ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/css/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/vendor.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/app.min.css'); ?>">

</head>

<body class="pace-top">
    <div id="app" class="app app-full-height app-without-header">
        <div class="register">
            <div class="register-content">
                <form action="<?= base_url('admin/register-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" class="was-validated">
                    <h1 class="text-center">Sign Up</h1>
                    <p class="text-inverse text-opacity-50 text-center">One Admin ID is all you need to access all the Admin services.</p>
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
                    <div class="mb-3">
                        <label for="admin_name_label" class="form-label">Name</label>
                        <input required name="admin_name" type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_name_label" placeholder="John">
                    </div>
                    <div class="mb-3">
                        <label for="admin_surname_label" class="form-label">Surname</label>
                        <input required name="admin_surname" type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_surname_label" placeholder="Smith">
                    </div>
                    <div class="mb-3">
                        <label for="admin_email_label" class="form-label">Email Address</label>
                        <input required name="admin_email" type="email" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_email_label" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="admin_username_label" class="form-label">Username</label>
                        <input required name="admin_username" type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_username_label" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="admin_password_label" class="form-label">Password</label>
                        <input required name="admin_password" type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_password_label">
                    </div>
                    <div class="mb-3">
                        <label for="admin_role_label" class="form-label">Role</label>
                        <select name="admin_role" required class="form-select form-select-lg bg-inverse bg-opacity-5" id="admin_role_label">
                            <option value="666">Administrator</option>
                            <option value="333">Reporter</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label for="admin_captcha_label" class="form-label">Captcha <span class="text-success">(not case-sensitive)</span></label>
                        </div>
                        <div class="d-flex">
                            <img src="<?= base_url('file_manager/system/captcha/') . $admin_auth_captcha["filename"]; ?>" class="me-3" style="border-radius:8px;" alt="Captcha">
                            <input required name="admin_captcha" type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_captcha_label" placeholder="Captcha Code">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100">Sign Up</button>
                    </div>
                    <div class="text-inverse text-opacity-50 text-center">
                        Already have an Admin ID? <a href="<?= base_url('admin/auth'); ?>">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
        <a href="javascript:void(0);" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    </div>
    <script src="<?= base_url('public/admin/assets/js/vendor.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/js/app.min.js'); ?>"></script>
</body>

</html>