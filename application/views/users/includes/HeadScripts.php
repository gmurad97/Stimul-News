<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!is_null($branding_data)) : ?>
        <title><?= base64_decode($branding_data->title_prefix); ?> - <?= $user_page_name; ?></title>
        <link rel="shortcut icon" href="<?= base_url('file_manager/branding/' . $branding_data->favicon->file_name); ?>" type="<?= $branding_data->favicon->file_type; ?>">
    <?php else : ?>
        <title>Stimul News - <?= $user_page_name; ?></title>
        <link rel="shortcut icon" href="<?= base_url('public/user/assets/images/logo/favicon.ico'); ?>" type="image/x-icon">
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