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

    /*=====LOCAL USER CONTROLLER FUNCTION - ENDED=====*/

    /*=====GLOBAL USERS PAGES - START=====*/
    public function index()
    {
        $branding_data_uid = $this->UserModel->table_row_id("branding", "b_uid");
        $topbar_data_uid = $this->UserModel->table_row_id("topbar", "t_uid");
        $data["user_page_name"] = "Home";
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get($branding_data_uid)["b_data"] ?? NULL, FALSE);
        $data["topbar_data"]["info"] = $this->UserModel->topbarInfo();
        $data["topbar_data"]["options"] = json_decode($this->UserModel->topbar_user_db_get($topbar_data_uid)["t_data"] ?? NULL, FALSE);
        $data["categories_navbar"] = $this->UserModel->categories_user_db_get(5);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();

        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);

        $data["news_last_list"] = $this->UserModel->news_user_db_get(6);

        $data["partners_list"] = $this->UserModel->partners_user_db_get();

        $this->load->view("users/Index", $data);
    }
    /*=====GLOBAL USERS PAGES - ENDED=====*/
}
