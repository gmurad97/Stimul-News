<!DOCTYPE html>
<html lang="en" data-bs-theme="<?= ($global_settings_data->dark_mode_cms ?? 'dark') ? 'dark' : ''; ?>">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stimul News CMS - <?= $admin_page_name; ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/css/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/plugins/lity/css/lity.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/vendor.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/app.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/app-custom.min.css'); ?>">
</head>

<body>
    <div id="app" class="app">
        <div id="header" class="app-header">