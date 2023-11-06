<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stimul News CMS - <?= $admin_page_name; ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/css/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/lity/css/lity.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/vendor.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/app.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/app-custom.min.css'); ?>">

</head>

<body class="pace-top">

    <div id="app" class="app app-full-height app-without-header">

        <div class="login">

            <div class="login-content">
                <form action="index.html" method="POST" name="login_form">
                    <h1 class="text-center">Sign In</h1>
                    <div class="text-inverse text-opacity-50 text-center mb-4">
                        For your protection, please verify your identity.
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" value placeholder>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <a href="#" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>
                        </div>
                        <input type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value placeholder>
                    </div>
                    <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                    <div class="text-center text-inverse text-opacity-50">
                        Don't have an account yet? <a href="page_register.html">Sign up</a>.
                    </div>
                </form>
            </div>

        </div>





        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

    </div>

    <script src="<?= base_url('public/admin/assets/js/vendor.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/js/app.min.js'); ?>"></script>
</body>

</html>