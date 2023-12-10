<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
        $this->load->model("UserModel");
    }
    public function topbarInfo()
    {
        date_default_timezone_set("Asia/Baku");
        $weather = json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?key=83de84c69a3749b89c0221349232611&q=Baku&aqi=no"));
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
