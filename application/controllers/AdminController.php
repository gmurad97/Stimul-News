<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function index()
    {
        $data["admin_page_name"] = "Dashboard";
        $this->load->view("admins/Index", $data);
    }

    /*=====TOPBAR CRUD - START=====*/

    public function crud_topbar_create()
    {
        $data["admin_page_name"] = "Topbar Create";
        $this->load->view("admins/Topbar/Create", $data);
    }

    public function crud_topbar_create_action()
    {
        $topbar_self        = $this->input->post("topbar");
        $topbar_date        = $this->input->post("topbar_date");
        $topbar_time        = $this->input->post("topbar_time");
        $topbar_weather     = $this->input->post("topbar_weather");

        $json_data_decoded = [
            "topbar_self"       => empty($topbar_self)    ? FALSE : TRUE,
            "topbar_date"       => empty($topbar_date)    ? FALSE : TRUE,
            "topbar_time"       => empty($topbar_time)    ? FALSE : TRUE,
            "topbar_weather"    => empty($topbar_weather) ? FALSE : TRUE
        ];

        $json_data_encoded = json_encode($json_data_decoded);


        $data = [
            "t_json" => $json_data_encoded
        ];


        $this->AdminModel->topbar_data_insert($data);

        redirect(base_url("topbar-edit"));
    }









    public function crud_topbar_edit()
    {
        $data["admin_page_name"] = "Topbar Edit";
        $this->load->view("admins/Topbar/Edit", $data);
    }

    /*=====TOPBAR CRUD - ENDED=====*/
}
