<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminAuthCheck
{
    public function admin_auth_check()
    {
        $CI = &get_instance();
        $current_route = $CI->uri->uri_string();
        $allowed_routes = [
            "admin/auth",
            "admin/auth-action",
            "admin/register",
            "admin/register-action"
        ];
        if (!$this->isAuthenticated()) {
            if ($current_route != "admin/auth" && !in_array($current_route, $allowed_routes)) {
                $CI->session->set_flashdata(
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
            }
        } else if ($this->isAuthenticated()) {
            if (in_array($current_route, $allowed_routes)) {
                redirect(base_url("admin/dashboard"));
            }
        }
    }

    public function isAuthenticated()
    {
        $CI = &get_instance();
        return $CI->session->has_userdata("admin_auth");
    }
}
