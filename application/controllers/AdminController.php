<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    /*LOCAL ADMIN CONTROLLER FUNCTION - START*/
    public function AlertFlashData($alertType, $alertName, $alertHeadMessage, $alertShortMessage, $alertLongMessage)
    {
        $alert_type     = strtolower($alertType);
        $alert_bg_color = "rgba(0, 23, 51, 0.32)";
        $alert_icon     = "bi bi-info-circle";

        if ($alert_type === "info") {
            $alert_bg_color = "rgba(0, 23, 51, 0.32)";
            $alert_icon     = "bi bi-info-circle";
        } elseif ($alert_type === "success") {
            $alert_bg_color = "rgba(4, 27, 7, 0.32)";
            $alert_icon = "bi bi-check-circle";
        } elseif ($alert_type === "warning") {
            $alert_bg_color = "rgba(50, 46, 3, 0.32)";
            $alert_icon = "bi bi-exclamation-triangle";
        } elseif ($alert_type === "danger") {
            $alert_bg_color = "rgba(45, 0, 0, 0.32)";
            $alert_icon = "bi bi-exclamation-octagon";
        }

        $this->session->set_flashdata(
            $alertName,
            [
                "alert_type"            => $alert_type,
                "alert_icon"            => $alert_icon,
                "alert_bg_color"        => "background-color:" . $alert_bg_color,
                "alert_heading_message" => $alertHeadMessage,
                "alert_short_message"   => $alertShortMessage,
                "alert_long_message"    => $alertLongMessage
            ]
        );
    }
    /*LOCAL ADMIN CONTROLLER FUNCTION - ENDED*/

    /*=====DASHBOARD - START=====*/
    public function index()
    {
        $data["admin_page_name"] = "Dashboard";
        $this->load->view("admins/Index", $data);
    }
    /*=====DASHBOARD - ENDED=====*/

    /*=====TOPBAR CRUD - START=====*/
    public function crud_topbar_create()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
        if ($topbar_db_row == -1) {
            $data["admin_page_name"] = "Topbar Create";
            $this->load->view("admins/Topbar/Create", $data);
        } else {
            redirect(base_url("topbar-edit"));
        }
    }

    public function crud_topbar_create_action()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
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
                "t_data" => $json_data_encoded
            ];

            $this->AdminModel->topbar_admin_db_insert($data);

            $this->AlertFlashData(
                "success",
                "topbar_alert",
                "Create",
                "Success!",
                "The topbar has been successfully created."
            );

            redirect(base_url("topbar-edit"));
        } else {
            redirect(base_url("topbar-edit"));
        }
    }

    public function crud_topbar_edit()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
        if ($topbar_db_row == -1) {
            redirect(base_url("topbar-create"));
        } else {
            $data["admin_page_name"] = "Topbar Edit";
            $data["admin_topbar"] = json_decode($this->AdminModel->topbar_admin_db_get($topbar_db_row)["t_data"]);
            $this->load->view("admins/Topbar/Edit", $data);
        }
    }

    public function crud_topbar_edit_action()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
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
                "t_data" => $json_data_encoded
            ];

            $this->AdminModel->topbar_admin_db_edit($topbar_db_row, $data);

            $this->AlertFlashData(
                "success",
                "topbar_alert",
                "Edit",
                "Success!",
                "The topbar has been successfully edited."
            );

            redirect(base_url("topbar-edit"));
        }
    }

    public function crud_topbar_delete()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
        $this->AdminModel->topbar_admin_db_delete($topbar_db_row);

        $this->AlertFlashData(
            "success",
            "topbar_alert",
            "Remove",
            "Success!",
            "The topbar has been successfully removed."
        );

        redirect(base_url("topbar-create"));
    }
    /*=====TOPBAR CRUD - ENDED=====*/

    /*=====BRANDING CRUD - START=====*/
    public function crud_branding_create()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
        if ($branding_db_row == -1) {
            $data["admin_page_name"] = "Branding Create";
            $this->load->view("admins/Branding/Create", $data);
        } else {
            redirect(base_url("branding-edit"));
        }
    }

    public function crud_branding_create_action()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
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
                "b_data" => $json_data_encoded
            ];

            $this->AdminModel->branding_admin_db_insert($data);

            $this->AlertFlashData(
                "success",
                "branding_alert",
                "Create",
                "Success!",
                "The branding has been successfully created."
            );

            redirect(base_url("branding-edit"));
        } else {
            redirect(base_url("branding-edit"));
        }
    }

    public function crud_branding_edit()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
        if ($branding_db_row == -1) {
            redirect(base_url("branding-create"));
        } else {
            $data["admin_page_name"] = "Branding Edit";
            $data["admin_branding"] = json_decode($this->AdminModel->branding_admin_db_get($branding_db_row)["b_data"]);
            $this->load->view("admins/Branding/Edit", $data);
        }
    }

    public function crud_branding_edit_action()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
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

            $old_branding_data = json_decode($this->AdminModel->branding_admin_db_get($branding_db_row)["b_data"], TRUE);

            $logo_dark_img  = $old_branding_data["logo_dark"];
            $logo_light_img = $old_branding_data["logo_light"];
            $favicon_img    = $old_branding_data["favicon"];

            if ($this->upload->do_upload("logo_dark_img")) {
                if (isset($logo_dark_img["file_name"]) && file_exists($branding_config["upload_path"] . $logo_dark_img["file_name"])) {
                    unlink($branding_config["upload_path"] . $logo_dark_img["file_name"]);
                }
                $logo_dark_img = $this->upload->data();
            } elseif ($this->upload->do_upload("logo_light_img")) {
                if (isset($logo_light_img["file_name"]) && file_exists($branding_config["upload_path"] . $logo_light_img["file_name"])) {
                    unlink($branding_config["upload_path"] . $logo_light_img["file_name"]);
                }
                $logo_light_img = $this->upload->data();
            } elseif ($this->upload->do_upload("favicon_img")) {
                if (isset($favicon_img["file_name"]) && file_exists($branding_config["upload_path"] . $favicon_img["file_name"])) {
                    unlink($branding_config["upload_path"] . $favicon_img["file_name"]);
                }
                $favicon_img = $this->upload->data();
            }

            $json_data_decoded = [
                "logo_dark" => [
                    "file_name"  => $logo_dark_img["file_name"] ?? NULL,
                    "file_type"  => $logo_dark_img["file_type"] ?? NULL,
                    "file_ext"   => $logo_dark_img["file_ext"]  ?? NULL,
                    "visibility" => str_contains($logo_dark_visibility, "on") ? TRUE : FALSE
                ],
                "logo_light" => [
                    "file_name"  => $logo_light_img["file_name"] ?? NULL,
                    "file_type"  => $logo_light_img["file_type"] ?? NULL,
                    "file_ext"   => $logo_light_img["file_ext"]  ?? NULL,
                    "visibility" => str_contains($logo_light_visibility, "on") ? TRUE : FALSE
                ],
                "favicon" => [
                    "file_name"  => $favicon_img["file_name"] ?? NULL,
                    "file_type"  => $favicon_img["file_type"] ?? NULL,
                    "file_ext"   => $favicon_img["file_ext"]  ?? NULL
                ],
                "title_prefix" => $site_title_prefix
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "b_data" => $json_data_encoded
            ];

            $this->AdminModel->branding_admin_db_update($branding_db_row, $data);

            $this->AlertFlashData(
                "success",
                "branding_alert",
                "Edit",
                "Success!",
                "The branding has been successfully edited."
            );

            redirect(base_url("branding-edit"));
        }
    }

    public function crud_branding_delete()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
        $this->AdminModel->branding_admin_db_delete($branding_db_row);
        array_map("unlink", array_filter((array) glob("./file_manager/branding/*"), "file_exists"));

        $this->AlertFlashData(
            "success",
            "branding_alert",
            "Remove",
            "Success!",
            "The branding has been successfully removed."
        );

        redirect(base_url("branding-create"));
    }
    /*=====BRANDING CRUD - ENDED=====*/

    /*=====PARTNERS CRUD - START=====*/
    public function crud_partners_create()
    {
        $data["admin_page_name"] = "Partners Create";
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
                "p_data" => $json_data_encoded
            ];

            $this->AdminModel->partners_admin_db_insert($data);

            $this->AlertFlashData(
                "success",
                "partners_alert",
                "Create",
                "Success!",
                "The partner has been successfully added."
            );

            redirect(base_url("partners-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "partners_alert",
                "Create",
                "Warning!",
                "Please upload the partner's image."
            );

            redirect(base_url("partners-create"));
        }
    }

    public function crud_partners_list()
    {
        $data["admin_page_name"] = "Partners Table List";
        $data["partners_data"] = $this->AdminModel->partners_admin_db_get_results();
        $this->load->view("admins/Partners/List", $data);
    }

    public function crud_partners_edit($id)
    {
        $data["admin_page_name"] = "Partners Edit";
        $data["partner_data"] = $this->AdminModel->partners_admin_db_get($id);
        $this->load->view("admins/Partners/Edit", $data);
    }

    public function crud_partners_edit_action($id)
    {
        $old_partner_data = json_decode($this->AdminModel->partners_admin_db_get($id)["p_data"], TRUE);
        $partner_img_path = "./file_manager/partners/" . $old_partner_data["partner_img"];

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

            if (!is_dir($partner_img_path) && file_exists($partner_img_path)) {
                unlink($partner_img_path);
            }

            $partner_img = $this->upload->data();

            $json_data_decoded = [
                "partner_img"    => $partner_img["file_name"],
                "partner_link"   => $partner_link,
                "partner_title"  => $partner_title,
                "partner_status" => str_contains($partner_status, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "p_data" => $json_data_encoded
            ];

            $this->AdminModel->partners_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "partners_alert",
                "Edit",
                "Success!",
                "The partner has been successfully edited."
            );

            redirect(base_url("partners-list"));
        } else {
            $json_data_decoded = [
                "partner_img"    => $old_partner_data["partner_img"],
                "partner_link"   => $partner_link,
                "partner_title"  => $partner_title,
                "partner_status" => str_contains($partner_status, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "p_data" => $json_data_encoded
            ];

            $this->AdminModel->partners_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "partners_alert",
                "Edit",
                "Success!",
                "The partner has been successfully edited."
            );

            redirect(base_url("partners-list"));
        }
    }

    public function crud_partners_delete($id)
    {
        $partner_data = json_decode($this->AdminModel->partners_admin_db_get($id)["p_data"], TRUE);
        $partner_img_path = "./file_manager/partners/" . $partner_data["partner_img"];
        if (!is_dir($partner_img_path) && file_exists($partner_img_path)) {
            unlink($partner_img_path);
        }
        $this->AdminModel->partners_admin_db_delete($id);

        $this->AlertFlashData(
            "success",
            "topbar_alert",
            "Remove",
            "Success!",
            "The partner has been successfully removed."
        );

        redirect(base_url("partners-list"));
    }
    /*=====PARTNERS CRUD - ENDED=====*/

    /*=====CATEGORIES CRUD - START=====*/
    public function crud_categories_create()
    {
        $data["admin_page_name"] = "Categories Create";
        $this->load->view("admins/Categories/Create", $data);
    }

















    public function crud_categories_create_action()
    {
    }

    public function crud_categories_edit()
    {
        $data["admin_page_name"] = "Categories Edit";
        $this->load->view("admins/Categories/Edit", $data);
    }

    public function crud_categories_edit_action()
    {
    }

    public function crud_categories_list()
    {
        $data["admin_page_name"] = "Categories List";
        $this->load->view("admins/Categories/List", $data);
    }

    public function crud_categories_delete()
    {
    }
    /*=====CATEGORIES CRUD - ENDED=====*/
}
