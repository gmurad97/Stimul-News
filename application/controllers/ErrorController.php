<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ╔╗
 * ╠╠═ Author: Murad Gazymagomedov
 * ╠╠═ Username: gmurad97
 * ╠╠═ Version: 3.3
 * ║║
 * ╠╠═ Open Server Panel 5.4.3 Specs
 * ╠╠╠══ Modules
 * ╠╠╠╠═══ Http: Apache_2.4-PHP_8.0-8.1+Nginx_1.23
 * ╠╠╠╠═══ PHP: PHP_8.0
 * ╠╠╠╠═══ MySQL / MariaDB: MySQL-8.0-Win10
 * ╠╠╠══ Mail
 * ╠╠╠╠═══ Way to send e-mail: Send mail through a remote SMTP server
 * ╚╝
 **/

class ErrorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel"); //For Admin Pages Error404
        $this->load->model("UserModel"); //For User Pages Error404
    }

    public function topbarInfo()
    {
        date_default_timezone_set("Asia/Baku");
        $weather = json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?key=cb366c9147854d51a5a34813240202&q=Baku&aqi=no"));
        return (object) [
            "date" => date("d.m.Y"),
            "time" => date("H:i"),
            "weather" => $weather->current->temp_c
        ];
    }

    public function Error404()
    {
        $current_route = $this->uri->uri_string();
        if (str_starts_with($current_route, "admin")) {
            $data["admin_page_name"] = "Page Not Found";
            $this->output->set_status_header(404);
            $this->load->view("admins/Error404", $data);
        } else {
            $data["user_page_name"] = "Page Not Found";
            $data["topbar"] = [
                "data" => $this->topbarInfo(),
                "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
            ];
            $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
            $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
            $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
            $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
            $data["about_data"] = $this->UserModel->about_user_db_get();
            $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
            $this->output->set_status_header(404);
            $this->load->view("users/contents/Error404", $data);
        }
    }
}
