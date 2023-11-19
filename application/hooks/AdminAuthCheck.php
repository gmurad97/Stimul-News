<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminRole
{
    const ROLE_ROOT_CODE = "999";
    const ROLE_ADMIN_CODE = "666";
    const ROLE_REDACTOR_CODE = "333";
}

class AdminAuthCheck
{
    protected function in_array_prefix($needle, array $haystack)
    {
        foreach ($haystack as $prefix) {
            if (str_starts_with($needle, $prefix)) {
                return true;
            }
        }
        return false;
    }

    public function isAuthenticated()
    {
        $CI = &get_instance();
        return $CI->session->has_userdata("admin_auth");
    }

    public function admin_auth_check()
    {
        $CI = &get_instance();
        $current_route = $CI->uri->uri_string();

        $unauthorized_allowed_routes_prefix = [
            "admin/auth",
            "admin/register",
        ];

        $admin_allowed_routes_prefix = [
            "admin/"
        ];

        $redactor_allowed_routes_prefix = [
            "admin/dashboard",
            "admin/gallery",
            "admin/news",
            "admin/gpt",
            "admin/profile",
            "admin/logout"
        ];

        if ($this->isAuthenticated()) {
            $current_role = $CI->session->userdata("admin_auth")["admin_role"];
            if ($current_role === AdminRole::ROLE_REDACTOR_CODE) {
                if (!$this->in_array_prefix($current_route, $redactor_allowed_routes_prefix)) {
                    $CI->session->set_flashdata(
                        "crud_alert",
                        [
                            "alert_type"          => "warning",
                            "alert_icon"          => "bi bi-exclamation-triangle",
                            "alert_bg_color"      => "background-color:rgba(45, 0, 0, 0.32)",
                            "alert_short_message" => "Warning!",
                            "alert_long_message"  => "You don't have the permission to do this."
                        ]
                    );
                    redirect(base_url("admin/news-list"));
                }
            }
        } else {
        }




        /* if (!$this->isAuthenticated()) {
            if ($current_route != "admin/auth" && !in_array($current_route, $unauthorized_allowed_routes_prefix)) {
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
            if ($CI->session->userdata("admin_auth")["admin_role"] === "333") {
                if (!str_starts_with($current_route, "admin/news")) {
                    redirect(base_url("admin/news-list"));
                }
            }
        } */
    }
}
