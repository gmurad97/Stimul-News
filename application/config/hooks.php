<?php
defined('BASEPATH') or exit('No direct script access allowed');

$hook["post_controller_constructor"] = [
    "class"    => "AdminAuthCheck",
    "function" => "admin_auth_check",
    "filename" => "AdminAuthCheck.php",
    "filepath" => "hooks"
];
