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
        <div class="error-page">
            <div class="error-page-content">
                <div class="card mb-5 mx-auto" style="max-width: 320px;">
                    <div class="card-body">
                        <div class="card">
                            <div class="error-code">404</div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
                <h1>Oops!</h1>
                <h3>We can't seem to find the page you're looking for</h3>
                <hr>
                <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-outline-theme px-3 rounded-pill">
                    <i class="bi bi-cpu me-1 ms-n1"></i>
                    Dashboard
                </a>
            </div>
        </div>
        <a href="javascript:void(0);" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    </div>
    <script src="<?= base_url('public/admin/assets/js/vendor.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/js/app.min.js'); ?>"></script>
</body>

</html>