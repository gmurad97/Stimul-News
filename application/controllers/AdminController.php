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
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_id");
        if ($topbar_db_row == -1) {
            $data["admin_page_name"] = "Topbar Create";
            $this->load->view("admins/Topbar/Create", $data);
        } else {
            redirect(base_url("topbar-edit"));
        }
    }

    public function crud_topbar_create_action()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_id");
        if ($topbar_db_row == -1) {
            $topbar_self    = $this->input->post("topbar_self",    TRUE);
            $topbar_date    = $this->input->post("topbar_date",    TRUE);
            $topbar_time    = $this->input->post("topbar_time",    TRUE);
            $topbar_weather = $this->input->post("topbar_weather", TRUE);

            $json_data_decoded = [
                "topbar_self"    => str_contains($topbar_self,    "on") ? TRUE : FALSE,
                "topbar_date"    => str_contains($topbar_date,    "on") ? TRUE : FALSE,
                "topbar_time"    => str_contains($topbar_time,    "on") ? TRUE : FALSE,
                "topbar_weather" => str_contains($topbar_weather, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "t_options" => $json_data_encoded
            ];

            $this->AdminModel->topbar_admin_db_insert($data);

            $this->session->set_flashdata(
                "topbar_alert",
                [
                    "alert_type"            => "success",
                    "alert_icon"            => "fa-solid fa-circle-check",
                    "alert_bg_color"        => "background-color: rgba(4, 27, 7, 0.32);",
                    "alert_heading_message" => "Create",
                    "alert_short_message"   => "Success!",
                    "alert_long_message"    => "The topbar has been successfully created."
                ]
            );

            redirect(base_url("topbar-edit"));
        } else {
            redirect(base_url("topbar-edit"));
        }
    }

    public function crud_topbar_edit()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_id");
        if ($topbar_db_row == -1) {
            redirect(base_url("topbar-create"));
        } else {
            $data["admin_page_name"] = "Topbar Edit";
            $data["admin_topbar_encoded"] = $this->AdminModel->topbar_admin_db_get($topbar_db_row);
            $this->load->view("admins/Topbar/Edit", $data);
        }
    }

    public function crud_topbar_edit_action()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_id");
        if ($topbar_db_row == -1) {
            redirect(base_url("topbar-create"));
        } else {
            $topbar_self    = $this->input->post("topbar_self",    TRUE);
            $topbar_date    = $this->input->post("topbar_date",    TRUE);
            $topbar_time    = $this->input->post("topbar_time",    TRUE);
            $topbar_weather = $this->input->post("topbar_weather", TRUE);

            $json_data_decoded = [
                "topbar_self"    => str_contains($topbar_self,    "on") ? TRUE : FALSE,
                "topbar_date"    => str_contains($topbar_date,    "on") ? TRUE : FALSE,
                "topbar_time"    => str_contains($topbar_time,    "on") ? TRUE : FALSE,
                "topbar_weather" => str_contains($topbar_weather, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "t_options" => $json_data_encoded
            ];

            $this->AdminModel->topbar_admin_db_edit($topbar_db_row, $data);

            $this->session->set_flashdata(
                "topbar_alert",
                [
                    "alert_type"            => "success",
                    "alert_icon"            => "fa-solid fa-circle-check",
                    "alert_bg_color"        => "background-color: rgba(4, 27, 7, 0.32);",
                    "alert_heading_message" => "Edit",
                    "alert_short_message"   => "Success!",
                    "alert_long_message"    => "The topbar has been successfully edited."
                ]
            );

            redirect(base_url("topbar-edit"));
        }
    }

    public function crud_topbar_delete()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_id");
        $this->AdminModel->topbar_admin_db_delete($topbar_db_row);

        $this->session->set_flashdata(
            "topbar_alert",
            [
                "alert_type"            => "success",
                "alert_icon"            => "fa-solid fa-circle-check",
                "alert_bg_color"        => "background-color: rgba(4, 27, 7, 0.32);",
                "alert_heading_message" => "Remove",
                "alert_short_message"   => "Success!",
                "alert_long_message"    => "The topbar has been successfully removed."
            ]
        );

        redirect(base_url("topbar-create"));
    }

    /*=====TOPBAR CRUD - ENDED=====*/
}
