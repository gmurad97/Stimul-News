<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminAuthCheck
{
    public function admin_auth_check()
    {
        $CI = &get_instance();
        $current_route = $CI->uri->uri_string();
        $allowed_page = array(
            "admin/auth",
            "admin/register"
        );
        if (!$this->isAuthenticated() && !in_array($current_route, $allowed_page, TRUE)) {
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
    }

    public function isAuthenticated()
    {
        $CI = &get_instance();
        return get_instance()->session->has_userdata("admin_auth");
    }
}
