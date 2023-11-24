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
        $weather = json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?key=a548983232374eafb8002027232011&q=Baku&aqi=no"));
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
            $branding_data_uid = $this->UserModel->table_row_id("branding", "b_uid");
            $topbar_data_uid = $this->UserModel->table_row_id("topbar", "t_uid");
            $data["user_page_name"] = "Page Not Found";
            $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get($branding_data_uid)["b_data"] ?? NULL, FALSE);
            $data["topbar"]["data"] = $this->topbarInfo();
            $data["topbar"]["options"] = json_decode($this->UserModel->topbar_user_db_get($topbar_data_uid)["t_data"] ?? NULL, FALSE);
            $data["categories_navbar"] = $this->UserModel->categories_user_db_get(5);
            $this->output->set_status_header(404);
            $this->load->view("users/Error404", $data);
        }
    }
}
