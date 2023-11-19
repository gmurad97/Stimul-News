<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }

    private function topbarInfo()
    {
        date_default_timezone_set("Asia/Baku");
        $weather = json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?key=971b3ecf18ae495d845142406230209&q=Baku&aqi=no"));
        return [
            "date" => date("d.m.Y"),
            "time" => date("H:i"),
            "weather" => $weather->current->temp_c
        ];
    }

    public function index()
    {
        $data["page_name"] = "Home";
        $data["topbar_info"] = $this->topbarInfo();
        $data["topbar_options"] = json_decode($this->UserModel->topbar_user_db_get($this->UserModel->table_row_id("topbar", "t_uid"))["t_data"] ?? NULL);
        $data["branding_options"] = json_decode($this->UserModel->branding_user_db_get($this->UserModel->table_row_id("branding", "b_uid"))["b_data"] ?? NULL);
        $this->load->view("users/Index",$data);
    }

    public function pageNotFound()
    {
        $data["page_name"] = "404NOT FOUD";
        $data["topbar_info"] = $this->topbarInfo();
        $this->load->view("users/contents/PageNotFound", $data);
    }
}
