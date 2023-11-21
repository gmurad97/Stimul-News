<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }

    /*=====LOCAL USER CONTROLLER FUNCTION - START=====*/
    protected function topbarInfo()
    {
        date_default_timezone_set("Asia/Baku");
        $weather = json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?key=a548983232374eafb8002027232011&q=Baku&aqi=no"));
        return (object) [
            "date" => date("d.m.Y"),
            "time" => date("H:i"),
            "weather" => $weather->current->temp_c
        ];
    }
    /*=====LOCAL USER CONTROLLER FUNCTION - ENDED=====*/

    /*=====GLOBAL USERS PAGES - START=====*/
    public function index()
    {
        $branding_data_uid = $this->UserModel->table_row_id("branding", "b_uid");
        $topbar_data_uid = $this->UserModel->table_row_id("topbar", "t_uid");
        $data["user_page_name"] = "Home";
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get($branding_data_uid)["b_data"] ?? NULL, FALSE);
        $data["topbar_data"]["info"] = $this->topbarInfo();
        $data["topbar_data"]["options"] = json_decode($this->UserModel->topbar_user_db_get($topbar_data_uid)["t_data"] ?? NULL, FALSE);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["news_list"] = $this->UserModel->news_user_db_get();
        $this->load->view("users/Index", $data);
    }











/*     public function pageNotFound()
    {
        $data["page_name"] = "404NOT FOUD";
        $data["topbar_info"] = $this->topbarInfo();
        $this->load->view("users/contents/PageNotFound", $data);
    } */

    /*=====GLOBAL USERS PAGES - ENDED=====*/
}
