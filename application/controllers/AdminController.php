<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * AUTHOR: Murad Gazymagomedov
 * USERNAME: gmurad97 || ASProgerHack
 * USER TEMPLATE: MORUS NEWS (Dump&Crack FrontEnd Pages)
 * ADMIN TEMPLATE: HUD ADMIN (Dump&Crack FrontEnd Pages)
 * VERSION: 1.0
 */

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    /*=====LOCAL ADMIN CONTROLLER FUNCTION - START=====*/
    protected function SendEmail(array $eTo, string $eSubject, string $eMessage): bool
    {
        $eFrom = "stimul.news@flash.az";
        $eFromName = "STIMUL NEWS";

        $this->email->clear();
        $this->email->from($eFrom, $eFromName);
        $this->email->to($eTo);
        $this->email->subject($eSubject);
        $this->email->message($eMessage);

        return $this->email->send() ? true : false;
    }

    protected function AlertFlashData(string $alertType, string $alertName, string $alertHeadMessage, string $alertShortMessage, string $alertLongMessage): void
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

    protected function CryptoPrice($cryptoLimit)
    {
        $curl_crypto_price = curl_init("https://api.binance.com/api/v3/ticker/price");
        curl_setopt($curl_crypto_price, CURLOPT_USERAGENT, "StimulNewsClient-v1.0");
        curl_setopt($curl_crypto_price, CURLOPT_RETURNTRANSFER, TRUE);
        $response_result = array_values(array_filter(json_decode(curl_exec($curl_crypto_price), FALSE), function ($cryptoPair) {
            if (str_ends_with($cryptoPair->symbol, "USDT")) {
                return $cryptoPair->symbol;
            }
        }));
        curl_close($curl_crypto_price);
        return array_splice($response_result, 0, $cryptoLimit);
    }

    protected function FiatPrice($sourceFiat, array $currencyFiat)
    {
        $curl_fiat_price = curl_init("http://apilayer.net/api/live?access_key=fe5846bdd06207a77f1865b04022e68f&currencies=" . join(",", $currencyFiat) . "&source=" . $sourceFiat . "&format=1");
        curl_setopt($curl_fiat_price, CURLOPT_USERAGENT, "StimulNewsClient-v1.0");
        curl_setopt($curl_fiat_price, CURLOPT_RETURNTRANSFER, TRUE);
        $response_result = curl_exec($curl_fiat_price);
        curl_close($curl_fiat_price);
        return json_decode($response_result, TRUE)["quotes"];
    }
    /*=====LOCAL ADMIN CONTROLLER FUNCTION - ENDED=====*/

    /*=====DASHBOARD - START=====*/
    public function dashboard()
    {
        $data["admin_page_name"] = "Dashboard";
        $data["crypto_price"] = $this->CryptoPrice(3);
        $data["fiat_price"] = $this->FiatPrice("USD", ["AZN", "RUB", "EUR"]);
        $this->load->view("admins/Dashboard", $data);
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
            redirect(base_url("admin/topbar-edit"));
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
                "crud_alert",
                "Create",
                "Success!",
                "The topbar has been successfully created."
            );

            redirect(base_url("admin/topbar-edit"));
        } else {
            redirect(base_url("admin/topbar-edit"));
        }
    }

    public function crud_topbar_edit()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
        if ($topbar_db_row == -1) {
            redirect(base_url("admin/topbar-create"));
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
            redirect(base_url("admin/topbar-create"));
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
                "crud_alert",
                "Edit",
                "Success!",
                "The topbar has been successfully edited."
            );

            redirect(base_url("admin/topbar-edit"));
        }
    }

    public function crud_topbar_delete()
    {
        $topbar_db_row = $this->AdminModel->table_row_id("topbar", "t_uid");
        $this->AdminModel->topbar_admin_db_delete($topbar_db_row);

        $this->AlertFlashData(
            "success",
            "crud_alert",
            "Remove",
            "Success!",
            "The topbar has been successfully removed."
        );

        redirect(base_url("admin/topbar-create"));
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
            redirect(base_url("admin/branding-edit"));
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

            $this->load->library("upload", $branding_config);
            $this->upload->initialize($branding_config);

            $uploadResults = [
                "logo_dark_img"  => $this->upload->do_upload("logo_dark_img")  ? $this->upload->data() : NULL,
                "logo_light_img" => $this->upload->do_upload("logo_light_img") ? $this->upload->data() : NULL,
                "favicon_img"    => $this->upload->do_upload("favicon_img")    ? $this->upload->data() : NULL
            ];

            if (
                !is_null($uploadResults["logo_dark_img"])
                && !is_null($uploadResults["logo_light_img"])
                && !is_null($uploadResults["favicon_img"])
                && !empty($site_title_prefix)
            ) {
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
                    "crud_alert",
                    "Create",
                    "Success!",
                    "The branding has been successfully created."
                );

                redirect(base_url("admin/branding-edit"));
            } else {
                $this->AlertFlashData(
                    "warning",
                    "crud_alert",
                    "Create",
                    "Warning!",
                    "Please, fill in all the fields."
                );

                redirect($_SERVER["HTTP_REFERER"]);
            }
        } else {
            redirect(base_url("admin/branding-edit"));
        }
    }

    public function crud_branding_edit()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
        if ($branding_db_row == -1) {
            redirect(base_url("admin/branding-create"));
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
            redirect(base_url("admin/branding-create"));
        } else {
            $logo_dark_visibility  = $this->input->post("logo_dark_visibility",  TRUE);
            $logo_light_visibility = $this->input->post("logo_light_visibility", TRUE);
            $site_title_prefix     = $this->input->post("site_title_prefix",     TRUE);

            $branding_config["upload_path"]      = "./file_manager/branding/";
            $branding_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $branding_config["file_ext_tolower"] = TRUE;
            $branding_config["remove_spaces"]    = TRUE;
            $branding_config["encrypt_name"]     = TRUE;

            $this->load->library("upload", $branding_config);
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

            if (
                !empty($logo_dark_img)
                && !empty($logo_light_img)
                && !empty($favicon_img)
                && !empty($site_title_prefix)
            ) {
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
                    "crud_alert",
                    "Edit",
                    "Success!",
                    "The branding has been successfully edited."
                );

                redirect(base_url("admin/branding-edit"));
            } else {
                $this->AlertFlashData(
                    "warning",
                    "crud_alert",
                    "Create",
                    "Warning!",
                    "Please, fill in all the fields."
                );

                redirect($_SERVER["HTTP_REFERER"]);
            }
        }
    }

    public function crud_branding_delete()
    {
        $branding_db_row = $this->AdminModel->table_row_id("branding", "b_uid");
        $this->AdminModel->branding_admin_db_delete($branding_db_row);
        array_map("unlink", array_filter((array) glob("./file_manager/branding/*"), "file_exists"));

        $this->AlertFlashData(
            "success",
            "crud_alert",
            "Remove",
            "Success!",
            "The branding has been successfully removed."
        );

        redirect(base_url("admin/branding-create"));
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

        $this->load->library("upload", $partners_config);
        $this->upload->initialize($partners_config);

        if ($this->upload->do_upload("partner_img") && !empty($partner_link) && !empty($partner_title)) {
            $partner_img = $this->upload->data();

            $partners_config_img["image_library"] = "gd2";
            $partners_config_img["source_image"] = $partners_config["upload_path"] . $partner_img["file_name"];
            $partners_config_img["maintain_ratio"] = FALSE;
            $partners_config_img["width"] = 200;
            $partners_config_img["height"] = 150;

            $this->load->library("image_lib", $partners_config_img);
            $this->load->initialize($partners_config_img);

            $this->image_lib->resize();

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

            redirect(base_url("admin/partners-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "partners_alert",
                "Create",
                "Warning!",
                "Please, fill in all the fields."
            );

            redirect(base_url("admin/partners-create"));
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

        $this->load->library("upload", $partners_config);
        $this->upload->initialize($partners_config);

        if ($this->upload->do_upload("partner_img") && !empty($partner_link) && !empty($partner_title)) {
            if (!is_dir($partner_img_path) && file_exists($partner_img_path)) {
                unlink($partner_img_path);
            }

            $partner_img = $this->upload->data();

            $partners_config_img["image_library"] = "gd2";
            $partners_config_img["source_image"] = $partners_config["upload_path"] . $partner_img["file_name"];
            $partners_config_img["maintain_ratio"] = FALSE;
            $partners_config_img["width"] = 200;
            $partners_config_img["height"] = 150;

            $this->load->library("image_lib", $partners_config_img);
            $this->load->initialize($partners_config_img);

            $this->image_lib->resize();

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

            redirect(base_url("admin/partners-list"));
        } elseif (!empty($partner_link) && !empty($partner_title)) {
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

            redirect(base_url("admin/partners-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "partners_alert",
                "Edit",
                "Warning!",
                "Please, fill in all the fields."
            );

            redirect($_SERVER["HTTP_REFERER"]);
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
            "partners_alert",
            "Remove",
            "Success!",
            "The partner has been successfully removed."
        );

        redirect(base_url("admin/partners-list"));
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
        $category_en_name  = $this->input->post("category_en_name", TRUE);
        $category_ru_name  = $this->input->post("category_ru_name", TRUE);
        $category_az_name  = $this->input->post("category_az_name", TRUE);
        $category_bg_color = $this->input->post("category_bg_color", TRUE);
        $category_status   = $this->input->post("category_status", TRUE);

        $categories_config["upload_path"]      = "./file_manager/categories/";
        $categories_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $categories_config["file_ext_tolower"] = TRUE;
        $categories_config["remove_spaces"]    = TRUE;
        $categories_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $categories_config);
        $this->upload->initialize($categories_config);

        if ($this->upload->do_upload("category_img") && !empty($category_en_name) && !empty($category_ru_name) && !empty($category_az_name) && !empty($category_bg_color)) {
            $category_img = $this->upload->data();

            $breadcrumb_img_config["image_library"] = "gd2";
            $breadcrumb_img_config["source_image"] = $categories_config["upload_path"] . $category_img["file_name"];
            $breadcrumb_img_config["maintain_ratio"] = FALSE;
            $breadcrumb_img_config["width"] = 540;
            $breadcrumb_img_config["height"] = 370;

            $this->load->library("image_lib", $breadcrumb_img_config);
            $this->load->initialize($breadcrumb_img_config);

            $this->image_lib->resize();

            $json_data_decoded = [
                "category_img"     => $category_img["file_name"],
                "category_name"    => [
                    "en" => $category_en_name,
                    "ru" => $category_ru_name,
                    "az" => $category_az_name,
                ],
                "category_bg_color" => $category_bg_color,
                "category_status"  => str_contains($category_status, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "c_data" => $json_data_encoded
            ];

            $this->AdminModel->categories_admin_db_insert($data);

            $this->AlertFlashData(
                "success",
                "categories_alert",
                "Create",
                "Success!",
                "The category has been successfully added."
            );

            redirect(base_url("admin/categories-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "categories_alert",
                "Create",
                "Warning!",
                "Please, fill in all the fields."
            );

            redirect(base_url("admin/categories-create"));
        }
    }

    public function crud_categories_list()
    {
        $data["admin_page_name"] = "Categories List";
        $data["categories_data"] = $this->AdminModel->categories_admin_db_get_results();
        $this->load->view("admins/Categories/List", $data);
    }

    public function crud_categories_edit($id)
    {
        $data["admin_page_name"] = "Categories Edit";
        $data["category_data"] = $this->AdminModel->categories_admin_db_get($id);
        $this->load->view("admins/Categories/Edit", $data);
    }

    public function crud_categories_edit_action($id)
    {
        $old_category_data = json_decode($this->AdminModel->categories_admin_db_get($id)["c_data"], TRUE);
        $category_img_path = "./file_manager/partners/" . $old_category_data["category_img"];

        $category_en_name  = $this->input->post("category_en_name", TRUE);
        $category_ru_name  = $this->input->post("category_ru_name", TRUE);
        $category_az_name  = $this->input->post("category_az_name", TRUE);
        $category_bg_color = $this->input->post("category_bg_color", TRUE);
        $category_status   = $this->input->post("category_status", TRUE);

        $categories_config["upload_path"]      = "./file_manager/categories/";
        $categories_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $categories_config["file_ext_tolower"] = TRUE;
        $categories_config["remove_spaces"]    = TRUE;
        $categories_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $categories_config);
        $this->upload->initialize($categories_config);

        if ($this->upload->do_upload("category_img") && !empty($category_en_name) && !empty($category_ru_name) && !empty($category_az_name) && !empty($category_bg_color)) {
            if (!is_dir($category_img_path) && file_exists($category_img_path)) {
                unlink($category_img_path);
            }

            $category_img = $this->upload->data();

            $breadcrumb_img_config["image_library"] = "gd2";
            $breadcrumb_img_config["source_image"] = $categories_config["upload_path"] . $category_img["file_name"];
            $breadcrumb_img_config["maintain_ratio"] = FALSE;
            $breadcrumb_img_config["width"] = 1920;
            $breadcrumb_img_config["height"] = 1080;

            $this->load->library("image_lib", $breadcrumb_img_config);
            $this->load->initialize($breadcrumb_img_config);

            $this->image_lib->resize();

            $json_data_decoded = [
                "category_img"     => $category_img["file_name"],
                "category_name"    => [
                    "en" => $category_en_name,
                    "ru" => $category_ru_name,
                    "az" => $category_az_name,
                ],
                "category_bg_color" => $category_bg_color,
                "category_status"  => str_contains($category_status, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "c_data" => $json_data_encoded
            ];

            $this->AdminModel->categories_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "categories_alert",
                "Create",
                "Success!",
                "The category has been successfully edited."
            );

            redirect(base_url("admin/categories-list"));
        } else if (!empty($category_en_name) && !empty($category_ru_name) && !empty($category_az_name) && !empty($category_bg_color)) {
            $json_data_decoded = [
                "category_img"     => $old_category_data["category_img"],
                "category_name"    => [
                    "en" => $category_en_name,
                    "ru" => $category_ru_name,
                    "az" => $category_az_name,
                ],
                "category_bg_color" => $category_bg_color,
                "category_status"  => str_contains($category_status, "on") ? TRUE : FALSE
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "c_data" => $json_data_encoded
            ];

            $this->AdminModel->categories_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "categories_alert",
                "Create",
                "Success!",
                "The category has been successfully edited."
            );

            redirect(base_url("admin/categories-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "categories_alert",
                "Edit",
                "Warning!",
                "Please, fill in all the fields."
            );

            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function crud_categories_delete($id)
    {
        $category_data = json_decode($this->AdminModel->categories_admin_db_get($id)["c_data"], TRUE);
        $category_img_path = "./file_manager/categories/" . $category_data["category_img"];
        if (!is_dir($category_img_path) && file_exists($category_img_path)) {
            unlink($category_img_path);
        }

        $this->AdminModel->categories_admin_db_delete($id);

        $this->AlertFlashData(
            "success",
            "categories_alert",
            "Remove",
            "Success!",
            "The category has been successfully removed."
        );

        redirect(base_url("admin/categories-list"));
    }
    /*=====CATEGORIES CRUD - ENDED=====*/

    /*=====NEWS CRUD - START=====*/
    public function crud_news_create()
    {
        $data["admin_page_name"] = "News Create";
        $data["categories_list"] = $this->AdminModel->categories_admin_db_get_results();
        $this->load->view("admins/News/Create", $data);
    }

    public function crud_news_create_action()
    {
        $categories_list_data = $this->AdminModel->categories_admin_db_get_results();
        $categories_list = array_map(function ($category_item) {
            return json_decode($category_item["c_data"], TRUE)["category_name"]["en"];
        }, $categories_list_data);

        $news_title_en             = substr($this->input->post("news_title_en", TRUE), 0, 40);
        $news_title_ru             = substr($this->input->post("news_title_ru", TRUE), 0, 40);
        $news_title_az             = substr($this->input->post("news_title_az", TRUE), 0, 40);
        $news_short_description_en = substr($this->input->post("news_short_description_en", TRUE), 0, 118);
        $news_short_description_ru = substr($this->input->post("news_short_description_ru", TRUE), 0, 118);
        $news_short_description_az = substr($this->input->post("news_short_description_az", TRUE), 0, 118);
        $news_full_description_en  = $this->input->post("news_full_description_en", FALSE);
        $news_full_description_ru  = $this->input->post("news_full_description_ru", FALSE);
        $news_full_description_az  = $this->input->post("news_full_description_az", FALSE);
        $news_category             = $this->input->post("news_category", TRUE);
        $news_status               = $this->input->post("news_status", TRUE);

        if (!in_array($news_category, $categories_list)) {
            $this->AlertFlashData(
                "danger",
                "news_alert",
                "Create",
                "Danger!",
                "Unknown error."
            );
            redirect(base_url("admin/news-create"));
        }

        $news_config["upload_path"]      = "./file_manager/news/";
        $news_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $news_config["file_ext_tolower"] = TRUE;
        $news_config["remove_spaces"]    = TRUE;
        $news_config["encrypt_name"]     = TRUE;
        $this->load->library("upload", $news_config);
        $this->upload->initialize($news_config);


        if (
            $this->upload->do_upload("news_preview_img")
            && !empty($news_title_en)
            && !empty($news_title_ru)
            && !empty($news_title_az)
            && !empty($news_short_description_en)
            && !empty($news_short_description_ru)
            && !empty($news_short_description_az)
            && !empty($news_full_description_en)
            && !empty($news_full_description_ru)
            && !empty($news_full_description_az)
            && !empty($news_category)
        ) {
            $news_preview = $this->upload->data();

            $preview_img_config["image_library"] = "gd2";
            $preview_img_config["source_image"] = $news_config["upload_path"] . $news_preview["file_name"];
            $preview_img_config["maintain_ratio"] = FALSE;
            $preview_img_config["width"] = 1920;
            $preview_img_config["height"] = 1080;

            $this->load->library("image_lib", $preview_img_config);
            $this->load->initialize($preview_img_config);

            $this->image_lib->resize();

            $json_data_decoded = [
                "news_title" => [
                    "en" => $news_title_en,
                    "ru" => $news_title_ru,
                    "az" => $news_title_az
                ],

                "news_short" => [
                    "en" => $news_short_description_en,
                    "ru" => $news_short_description_ru,
                    "az" => $news_short_description_az,
                ],

                "news_full" => [
                    "en" => $news_full_description_en,
                    "ru" => $news_full_description_ru,
                    "az" => $news_full_description_az,
                ],
                "news_preview" => $news_preview["file_name"],
                "news_category" => $news_category,
                "news_status" => str_contains($news_status, "on") ? TRUE : FALSE,
                "news_created_date" => date("d.m.Y"),
                "news_created_time" => date("H:i"),
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "n_data" => $json_data_encoded
            ];

            $this->AdminModel->news_admin_db_insert($data);
            //$inserted_id = $this->db->insert_id();

            $this->AlertFlashData(
                "success",
                "news_alert",
                "Create",
                "Success!",
                "The news has been successfully created."
            );

            redirect(base_url("admin/news-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "news_alert",
                "Create",
                "Warning!",
                "Please, fill in all the fields."
            );
            redirect(base_url("admin/news-create"));
        }
    }

    public function crud_news_list()
    {
        $data["admin_page_name"] = "News Create";
        $data["news_data"] = $this->AdminModel->news_admin_db_get_results();
        $this->load->view("admins/News/List", $data);
    }

    public function crud_news_detail($id)
    {
        $data["admin_page_name"] = "News Detail";
        $data["categories_data"] = $this->AdminModel->categories_admin_db_get_results();
        $data["news_data"] = $this->AdminModel->news_admin_db_get($id);
        $this->load->view("admins/News/Detail", $data);
    }

    public function crud_news_edit($id)
    {
        $data["admin_page_name"] = "News Edit";
        $data["categories_list"] = $this->AdminModel->categories_admin_db_get_results();
        $data["news_data"] = $this->AdminModel->news_admin_db_get($id);
        $this->load->view("admins/News/Edit", $data);
    }

    public function crud_news_edit_action($id)
    {
        $old_news_data = json_decode($this->AdminModel->news_admin_db_get($id)["n_data"], TRUE);
        $news_img_path = "./file_manager/news/" . $old_news_data["news_preview"];

        $categories_list_data = $this->AdminModel->categories_admin_db_get_results();
        $categories_list = array_map(function ($category_item) {
            return json_decode($category_item["c_data"], TRUE)["category_name"]["en"];
        }, $categories_list_data);

        $news_title_en             = substr($this->input->post("news_title_en", TRUE), 0, 50);
        $news_title_ru             = substr($this->input->post("news_title_ru", TRUE), 0, 50);
        $news_title_az             = substr($this->input->post("news_title_az", TRUE), 0, 50);
        $news_short_description_en = substr($this->input->post("news_short_description_en", TRUE), 0, 120);
        $news_short_description_ru = substr($this->input->post("news_short_description_ru", TRUE), 0, 120);
        $news_short_description_az = substr($this->input->post("news_short_description_az", TRUE), 0, 120);
        $news_full_description_en  = $this->input->post("news_full_description_en", FALSE);
        $news_full_description_ru  = $this->input->post("news_full_description_ru", FALSE);
        $news_full_description_az  = $this->input->post("news_full_description_az", FALSE);
        $news_category             = $this->input->post("news_category", TRUE);
        $news_status               = $this->input->post("news_status", TRUE);

        if (!in_array($news_category, $categories_list)) {
            $this->AlertFlashData(
                "danger",
                "news_alert",
                "Create",
                "Danger!",
                "Unknown error."
            );
            redirect(base_url("admin/news-create"));
        }

        $news_config["upload_path"]      = "./file_manager/news/";
        $news_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $news_config["file_ext_tolower"] = TRUE;
        $news_config["remove_spaces"]    = TRUE;
        $news_config["encrypt_name"]     = TRUE;
        $this->load->library("upload", $news_config);
        $this->upload->initialize($news_config);

        if (
            $this->upload->do_upload("news_preview_img")
            && !empty($news_title_en)
            && !empty($news_title_ru)
            && !empty($news_title_az)
            && !empty($news_short_description_en)
            && !empty($news_short_description_ru)
            && !empty($news_short_description_az)
            && !empty($news_full_description_en)
            && !empty($news_full_description_ru)
            && !empty($news_full_description_az)
            && !empty($news_category)
        ) {
            if (!is_dir($news_img_path) && file_exists($news_img_path)) {
                unlink($news_img_path);
            }

            $news_preview = $this->upload->data();

            $preview_img_config["image_library"] = "gd2";
            $preview_img_config["source_image"] = $news_config["upload_path"] . $news_preview["file_name"];
            $preview_img_config["maintain_ratio"] = FALSE;
            $preview_img_config["width"] = 1920;
            $preview_img_config["height"] = 1080;

            $this->load->library("image_lib", $preview_img_config);
            $this->load->initialize($preview_img_config);

            $this->image_lib->resize();

            $json_data_decoded = [
                "news_title" => [
                    "en" => $news_title_en,
                    "ru" => $news_title_ru,
                    "az" => $news_title_az
                ],

                "news_short" => [
                    "en" => $news_short_description_en,
                    "ru" => $news_short_description_ru,
                    "az" => $news_short_description_az,
                ],

                "news_full" => [
                    "en" => $news_full_description_en,
                    "ru" => $news_full_description_ru,
                    "az" => $news_full_description_az,
                ],
                "news_preview" => $news_preview["file_name"],
                "news_category" => $news_category,
                "news_status" => str_contains($news_status, "on") ? TRUE : FALSE,
                "news_created_date" => date("d.m.Y"),
                "news_created_time" => date("H:i"),
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "n_data" => $json_data_encoded
            ];

            $this->AdminModel->news_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "news_alert",
                "Edit",
                "Success!",
                "The news has been successfully edited."
            );

            redirect(base_url("admin/news-list"));
        } else if (
            !empty($news_title_en)
            && !empty($news_title_ru)
            && !empty($news_title_az)
            && !empty($news_short_description_en)
            && !empty($news_short_description_ru)
            && !empty($news_short_description_az)
            && !empty($news_full_description_en)
            && !empty($news_full_description_ru)
            && !empty($news_full_description_az)
            && !empty($news_category)
        ) {
            $json_data_decoded = [
                "news_title" => [
                    "en" => $news_title_en,
                    "ru" => $news_title_ru,
                    "az" => $news_title_az
                ],

                "news_short" => [
                    "en" => $news_short_description_en,
                    "ru" => $news_short_description_ru,
                    "az" => $news_short_description_az,
                ],

                "news_full" => [
                    "en" => $news_full_description_en,
                    "ru" => $news_full_description_ru,
                    "az" => $news_full_description_az,
                ],
                "news_preview" => $old_news_data["news_preview"],
                "news_category" => $news_category,
                "news_status" => str_contains($news_status, "on") ? TRUE : FALSE,
                "news_created_date" => date("d.m.Y"),
                "news_created_time" => date("H:i"),
            ];

            $json_data_encoded = json_encode($json_data_decoded);

            $data = [
                "n_data" => $json_data_encoded
            ];

            $this->AdminModel->news_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "news_alert",
                "Edit",
                "Success!",
                "The news has been successfully edited."
            );

            redirect(base_url("admin/news-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "news_alert",
                "Create",
                "Warning!",
                "Please, fill in all the fields."
            );
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function crud_news_delete($id)
    {
        $news_data = json_decode($this->AdminModel->news_admin_db_get($id)["n_data"], TRUE);
        $news_img_path = "./file_manager/news/" . $news_data["news_preview"];
        if (!is_dir($news_img_path) && file_exists($news_img_path)) {
            unlink($news_img_path);
        }

        $this->AdminModel->news_admin_db_delete($id);

        $this->AlertFlashData(
            "success",
            "news_alert",
            "Remove",
            "Success!",
            "The news has been successfully removed."
        );

        redirect(base_url("admin/news-list"));
    }
    /*=====NEWS CRUD - ENDED=====*/

    /*=====SUBSCRIBERS CRUD - START=====*/
    public function crud_subscribers_create()
    {
        $data["admin_page_name"] = "Subscribers Create";
        $this->load->view("admins/Subscribers/Create", $data);
    }

    public function crud_subscribers_create_action()
    {
        $subscriber_email = $this->input->post("subscriber_email", TRUE);
        $subscriber_status = $this->input->post("subscriber_status", TRUE);

        if (!empty($subscriber_email)) {
            $json_data = [
                "subscriber" => [
                    "email" => strtolower($subscriber_email),
                    "status" => str_contains($subscriber_status, "on") ? TRUE : FALSE
                ]
            ];

            $json_data_encoded = json_encode($json_data);

            $data = [
                "s_data" => $json_data_encoded
            ];

            $this->AdminModel->subscribers_admin_db_insert($data);

            $this->AlertFlashData(
                "success",
                "subscribers_alert",
                "Create",
                "Success!",
                "The subscriber has been successfully added."
            );

            redirect(base_url("admin/subscribers-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "subscribers_alert",
                "Create",
                "Warning!",
                "Please, fill in all the fields."
            );

            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function crud_subscribers_edit($id)
    {
        $data["admin_page_name"] = "Subscribers Edit";
        $data["subscriber_info"] = $this->AdminModel->subscribers_admin_db_get($id);
        $this->load->view("admins/Subscribers/Edit", $data);
    }

    public function crud_subscribers_edit_action($id)
    {
        $subscriber_email = $this->input->post("subscriber_email", TRUE);
        $subscriber_status = $this->input->post("subscriber_status", TRUE);

        if (!empty($subscriber_email)) {
            $json_data = [
                "subscriber" => [
                    "email" => strtolower($subscriber_email),
                    "status" => str_contains($subscriber_status, "on") ? TRUE : FALSE
                ]
            ];

            $json_data_encoded = json_encode($json_data);

            $data = [
                "s_data" => $json_data_encoded
            ];

            $this->AdminModel->subscribers_admin_db_update($id, $data);

            $this->AlertFlashData(
                "success",
                "subscribers_alert",
                "Create",
                "Success!",
                "The subscriber has been successfully added."
            );

            redirect(base_url("admin/subscribers-list"));
        } else {
            $this->AlertFlashData(
                "warning",
                "subscribers_alert",
                "Create",
                "Warning!",
                "Please, fill in all the fields."
            );

            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function crud_subscribers_list()
    {
        $data["admin_page_name"] = "Subscribers List";
        $data["subscribers_list"] = $this->AdminModel->subscribers_admin_db_get_results();
        $this->load->view("admins/Subscribers/List", $data);
    }

    public function crud_subscribers_delete($id)
    {
        $this->AdminModel->subscribers_admin_db_delete($id);

        $this->AlertFlashData(
            "success",
            "subscribers_alert",
            "Remove",
            "Success!",
            "The subscriber has been successfully removed."
        );

        redirect(base_url("admin/subscribers-list"));
    }
    /*=====SUBSCRIBERS CRUD - ENDED=====*/

    /*=====SLIDER CRUD - START=====*/






    //router jsonp
    public function news_detector($id)
    {
        $ret = $this->AdminModel->news_admin_db_get($id)["n_data"];
        print_r($ret);
    }


    public function crud_slider_create()
    {
        $data["admin_page_name"] = "Slider Create";
        $this->load->view("admins/Slider/Create", $data);
    }

    public function crud_slider_create_action()
    {
    }

    public function crud_slider_list()
    {
        $data["admin_page_name"] = "Slider List";
        $this->load->view("admins/Slider/List", $data);
    }

    public function crud_slider_edit($id)
    {
        $data["admin_page_name"] = "Slider Edit";
        $this->load->view("admins/Slider/Edit", $data);
    }

    public function crud_slider_edit_action($id)
    {
    }

    public function crud_slider_delete($id)
    {
    }









    /*=====SLIDER CRUD - ENDED=====*/
}
