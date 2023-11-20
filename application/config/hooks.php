<?php
defined('BASEPATH') or exit('No direct script access allowed');

$hook["post_controller_constructor"][] = [
    "class"    => "AdminRoleControl",
    "function" => "admin_auth_check",
    "filename" => "AdminRoleControl.php",
    "filepath" => "hooks"
];

$hook["post_controller_constructor"][] = [
    "class" => "LanguageLoader",
    "function" => "lang_initialize",
    "filename" => "LanguageLoader.php",
    "filepath" => "hooks"
];
