<?php
/* if (!$this->session->has_userdata("admin_auth")) {
    $this->session->set_flashdata(
        "crud_alert",
        [
            "alert_type"          => "danger",
            "alert_icon"          => "bi bi-exclamation-octagon",
            "alert_bg_color"      => "background-color:rgba(45, 0, 0, 0.32)",
            "alert_short_message" => "Danger!",
            "alert_long_message"  => "You are not logged in."
        ]
    );
    redirect(base_url("admin/auth"));
} */
?>
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

<body>
    <div id="app" class="app">
        <div id="header" class="app-header">