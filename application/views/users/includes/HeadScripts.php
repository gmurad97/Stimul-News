<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= empty($branding_options->title_prefix) || is_null($branding_options->title_prefix) ? "unseted prefix" : $branding_options->title_prefix; ?> - <?= $page_name; ?></title>
    <?php if (!is_null($branding_options->favicon->file_name)) : ?>
        <link rel="shortcut icon" href="<?= base_url('file_manager/branding/') . $branding_options->favicon->file_name; ?>" type="<?= $branding_options->favicon->file_type; ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/prata-font.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/poppins-font.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/owlcarousel/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/owlcarousel/css/owl.theme.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/owlcarousel/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/responsive.css'); ?>">
</head>
<body>