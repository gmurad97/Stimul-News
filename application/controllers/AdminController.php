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

    /*=====BRANDING CRUD - START=====*/
    public function crud_branding_create()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_id");
        if ($branding_db_row == -1) {
            $data["admin_page_name"] = "Branding Create";
            $this->load->view("admins/Branding/Create", $data);
        } else {
            redirect(base_url("branding-edit"));
        }
    }

    public function crud_branding_create_action()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_id");
        if ($branding_db_row == -1) {
            $logo_dark_visibility  = $this->input->post("logo_dark_visibility",  TRUE);
            $logo_light_visibility = $this->input->post("logo_light_visibility", TRUE);
            $site_title_prefix     = $this->input->post("site_title_prefix",     TRUE);

            $branding_config["upload_path"]      = "./file_manager/branding/";
            $branding_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $branding_config["file_ext_tolower"] = TRUE;
            $branding_config["remove_spaces"]    = TRUE;
            $branding_config["encrypt_name"]     = TRUE;

            $this->load->library("upload");
            $this->upload->initialize($branding_config);

            $uploadResults = [
                "logo_dark_img"  => $this->upload->do_upload("logo_dark_img")  ? $this->upload->data() : NULL,
                "logo_light_img" => $this->upload->do_upload("logo_light_img") ? $this->upload->data() : NULL,
                "favicon_img"    => $this->upload->do_upload("favicon_img")    ? $this->upload->data() : NULL
            ];

            $json_data_decoded = [
                "logo_dark" => [
                    "file_name"  => $uploadResults["logo_dark_img"]["file_name"] ?? NULL,
                    "file_type"  => $uploadResults["logo_dark_img"]["file_type"] ?? NULL,
                    "file_ext"   => $uploadResults["logo_dark_img"]["file_ext"]  ?? NULL,
                    "visibility" => str_contains($logo_dark_visibility, "on") ? TRUE : FALSE
                ],
                "logo_light" => [
                    "file_name"  => $uploadResults["logo_light_img"]["file_name"] ?? NULL,
                    "file_type"  => $uploadResults["logo_light_img"]["file_type"] ?? NULL,
                    "file_ext"   => $uploadResults["logo_light_img"]["file_ext"]  ?? NULL,
                    "visibility" => str_contains($logo_light_visibility, "on") ? TRUE : FALSE
                ],
                "favicon" => [
                    "file_name"  => $uploadResults["favicon_img"]["file_name"] ?? NULL,
                    "file_type"  => $uploadResults["favicon_img"]["file_type"] ?? NULL,
                    "file_ext"   => $uploadResults["favicon_img"]["file_ext"]  ?? NULL
                ],
                "title_prefix" => $site_title_prefix
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "b_options" => $json_data_encoded
            ];

            $this->AdminModel->branding_admin_db_insert($data);

            $this->session->set_flashdata(
                "branding_alert",
                [
                    "alert_type"            => "success",
                    "alert_icon"            => "fa-solid fa-circle-check",
                    "alert_bg_color"        => "background-color: rgba(4, 27, 7, 0.32);",
                    "alert_heading_message" => "Create",
                    "alert_short_message"   => "Success!",
                    "alert_long_message"    => "The branding has been successfully created."
                ]
            );

            redirect(base_url("branding-edit"));
        } else {
            redirect(base_url("branding-edit"));
        }
    }

    public function crud_branding_edit()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_id");
        if ($branding_db_row == -1) {
            redirect(base_url("branding-create"));
        } else {
            $data["admin_page_name"] = "Branding Edit";
            $data["admin_branding_encoded"] = $this->AdminModel->branding_admin_db_get($branding_db_row);
            $this->load->view("admins/Branding/Edit", $data);
        }
    }

    public function crud_branding_edit_action()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_id");
        if ($branding_db_row == -1) {
            redirect(base_url("branding-create"));
        } else {
            $logo_dark_visibility  = $this->input->post("logo_dark_visibility",  TRUE);
            $logo_light_visibility = $this->input->post("logo_light_visibility", TRUE);
            $site_title_prefix     = $this->input->post("site_title_prefix",     TRUE);

            $branding_config["upload_path"]      = "./file_manager/branding/";
            $branding_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $branding_config["file_ext_tolower"] = TRUE;
            $branding_config["remove_spaces"]    = TRUE;
            $branding_config["encrypt_name"]     = TRUE;

            $this->load->library("upload");
            $this->upload->initialize($branding_config);

            $old_data = json_decode($this->AdminModel->branding_admin_db_get($branding_db_row)["b_options"], TRUE);

            $uploadResults = [
                "logo_dark_img" =>
                $this->upload->do_upload("logo_dark_img") ?
                    (!is_dir($branding_config["upload_path"] . $old_data["logo_dark"]["file_name"]) ? (file_exists($branding_config["upload_path"] . $old_data["logo_dark"]["file_name"]) ? unlink($branding_config["upload_path"] . $old_data["logo_dark"]["file_name"]) : $this->upload->data()) : $this->upload->data())
                    : ($old_data["logo_dark"] ?? NULL),

                "logo_light_img" => $this->upload->do_upload("logo_light_img") ?
                    (!is_dir($branding_config["upload_path"] . $old_data["logo_light"]["file_name"]) ? (file_exists($branding_config["upload_path"] . $old_data["logo_light"]["file_name"]) ? unlink($branding_config["upload_path"] . $old_data["logo_light"]["file_name"]) : $this->upload->data()) : $this->upload->data())
                    : ($old_data["logo_light"] ?? NULL),

                "favicon_img" => $this->upload->do_upload("favicon_img") ?
                    (!is_dir($branding_config["upload_path"] . $old_data["favicon"]["file_name"]) ? (file_exists($branding_config["upload_path"] . $old_data["favicon"]["file_name"]) ? unlink($branding_config["upload_path"] . $old_data["favicon"]["file_name"]) : $this->upload->data()) : $this->upload->data())
                    : ($old_data["favicon"] ?? NULL),
            ];

            $json_data_decoded = [
                "logo_dark" => [
                    "file_name"  => $uploadResults["logo_dark_img"]["file_name"] ?? NULL,
                    "file_type"  => $uploadResults["logo_dark_img"]["file_type"] ?? NULL,
                    "file_ext"   => $uploadResults["logo_dark_img"]["file_ext"]  ?? NULL,
                    "visibility" => str_contains($logo_dark_visibility, "on") ? TRUE : FALSE
                ],
                "logo_light" => [
                    "file_name"  => $uploadResults["logo_light_img"]["file_name"] ?? NULL,
                    "file_type"  => $uploadResults["logo_light_img"]["file_type"] ?? NULL,
                    "file_ext"   => $uploadResults["logo_light_img"]["file_ext"]  ?? NULL,
                    "visibility" => str_contains($logo_light_visibility, "on") ? TRUE : FALSE
                ],
                "favicon" => [
                    "file_name"  => $uploadResults["favicon_img"]["file_name"] ?? NULL,
                    "file_type"  => $uploadResults["favicon_img"]["file_type"] ?? NULL,
                    "file_ext"   => $uploadResults["favicon_img"]["file_ext"]  ?? NULL
                ],
                "title_prefix" => $site_title_prefix
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "b_options" => $json_data_encoded
            ];

            $this->AdminModel->branding_admin_db_update($branding_db_row, $data);

            $this->session->set_flashdata(
                "branding_alert",
                [
                    "alert_type"            => "success",
                    "alert_icon"            => "fa-solid fa-circle-check",
                    "alert_bg_color"        => "background-color: rgba(4, 27, 7, 0.32);",
                    "alert_heading_message" => "Edit",
                    "alert_short_message"   => "Success!",
                    "alert_long_message"    => "The branding has been successfully edited."
                ]
            );

            redirect(base_url("branding-edit"));
        }
    }

    public function crud_branding_delete()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_id");
        $this->AdminModel->branding_admin_db_delete($branding_db_row);
        array_map("unlink", array_filter((array) glob("./file_manager/branding/*"), "file_exists"));
        $this->session->set_flashdata(
            "branding_alert",
            [
                "alert_type"            => "success",
                "alert_icon"            => "fa-solid fa-circle-check",
                "alert_bg_color"        => "background-color: rgba(4, 27, 7, 0.32);",
                "alert_heading_message" => "Remove",
                "alert_short_message"   => "Success!",
                "alert_long_message"    => "The branding has been successfully removed."
            ]
        );
        redirect(base_url("branding-create"));
    }
    /*=====BRANDING CRUD - ENDED=====*/

    /*=====PARTNERS CRUD - START=====*/

    public function crud_partners_create()
    {
        $data["admin_page_name"] = "Partners";
        $this->load->view("admins/Partners/Create", $data);
    }

    public function crud_partners_create_action()
    {
        $partner_link   = $this->input->post("partner_link",   TRUE);
        $partner_title  = $this->input->post("partner_title",  TRUE);
        $partner_status = $this->input->post("partner_status", TRUE);

        $partners_config["upload_path"]      = "./file_manager/partners/";
        $partners_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $partners_config["file_ext_tolower"] = TRUE;
        $partners_config["remove_spaces"]    = TRUE;
        $partners_config["encrypt_name"]     = TRUE;

        $this->load->library("upload");
        $this->upload->initialize($partners_config);

        if ($this->upload->do_upload("partner_img")) {
            $partner_img = $this->upload->data();

            $json_data_decoded = [
                "partner_img"    => $partner_img["file_name"],
                "partner_link"   => $partner_link,
                "partner_title"  => $partner_title,
                "partner_status" => str_contains($partner_status, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "p_options" => $json_data_encoded
            ];

            $this->AdminModel->partners_admin_db_insert($data);

            //session success with image
            redirect(base_url("partners-list"));
        } else {

            //session error without image
            redirect(base_url("partners-create"));
        }
    }

    public function crud_partners_list()
    {
        $data["admin_page_name"] = "Partners List";
        $data["partners_data"] = $this->AdminModel->partners_admin_db_get_results();
        $this->load->view("admins/Partners/List",$data);
    }

    public function crud_partners_edit()
    {
    }

    public function crud_partners_edit_action()
    {
    }

    /*=====PARTNERS CRUD - ENDED=====*/
}
