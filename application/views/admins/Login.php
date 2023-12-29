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
        <div class="login">
            <div class="login-content">
                <form action="<?= base_url('admin/auth-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded" class="was-validated">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <h1 class="text-center">Sign In</h1>
                    <div class="text-inverse text-opacity-50 text-center mb-4">
                        For your protection, please verify your identity.
                        <table class="table table-hover">
                            <thead class="text-success">
                                <tr>
                                    <td>Role</td>
                                    <td>Username</td>
                                    <td>Email</td>
                                    <td>Password</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>gmurad97</td>
                                    <td>murad.dev@bk.ru</td>
                                    <td>123</td>
                                </tr>
                                <tr>
                                    <td>Redactor</td>
                                    <td>rza.talibov</td>
                                    <td>rza.t@code.edu.az</td>
                                    <td>123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                        <div class="d-flex">
                            <label for="admin_login_label" class="form-label">Email Address or Username</label>
                        </div>
                        <input required name="admin_login" type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_login_label" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label for="admin_password_label" class="form-label">Password</label>
                        </div>
                        <input required name="admin_password" type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" id="admin_password_label" placeholder="Password">
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
                    <button type="submit" class="btn btn-outline-success btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                    <div class="text-center text-inverse text-opacity-50">
                        Don't have an account yet?
                        <a href="<?= base_url('admin/register'); ?>">Sign up</a>.
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