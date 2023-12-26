<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * AUTHOR:         Murad Gazymagomedov
 * USERNAME:       GMURAD97 || ASProgerHack
 * VERSION:        3.1
 * LOCAL SERVER:   OPENSERVER 5.4.3
 * SERVER VERSION: APACHE 2.4 + PHP 8.0-8.1 + NGINX 1.23
 * PHP VERSION:    PHP 8.0
 **/

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }

    /*==========LOCAL USER CONTROLLER FUNCTION - START==========*/
    public function topbarInfo()
    {
        date_default_timezone_set("Asia/Baku");
        $weather = json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?key=78d1f17f9cc84a38915151913232012&q=Baku&aqi=no"));
        return (object) [
            "date" => date("d.m.Y"),
            "time" => date("H:i"),
            "weather" => $weather->current->temp_c
        ];
    }
    /*==========LOCAL USER CONTROLLER FUNCTION - ENDED==========*/

    /*==========GLOBAL USERS PAGES - START==========*/

    public function index()
    {
        $data["user_page_name"] = "Home";
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);
        $data["news_recent_six"] = $this->UserModel->news_user_db_get(6);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["partners_list"] = $this->UserModel->partners_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $this->load->view("users/Index", $data);
    }

    public function news_list()
    {
        $data["user_page_name"] = "News";
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $data["breadcrumb_data"] = [
            "page_name" => $this->lang->line("breadcrumb_all_news"),
            "segment" => [
                $this->lang->line("breadcrumb_home") => base_url("home"),
                $this->lang->line("breadcrumb_news") => base_url("news")
            ],
            "img_file_name" => base_url("public/user/assets/images/breadcrumb/travel_bg.jpg")
        ];
        $config = [
            'first_link'       => '<i class="linearicons-arrow-left"></i>',
            'last_link'        => '<i class="linearicons-arrow-right"></i>',
            'next_link'        => FALSE,
            'prev_link'        => FALSE,
            'full_tag_open'    => '<div class="py-3 py-md-4 mt-2 mt-sm-0 mt-lg-5 border-top border-bottom"><ul class="pagination justify-content-center">',
            'full_tag_close'   => '</ul></div>',
            'first_tag_open'   => '<li class="page-item">',
            'first_tag_close'  => '</li>',
            'last_tag_open'    => '<li class="page-item">',
            'last_tag_close'   => '</li>',
            'next_tag_open'    => '<li class="page-item">',
            'next_tag_close'   => '</li>',
            'prev_tag_open'    => '<li class="page-item">',
            'prev_tag_close'   => '</li>',
            'num_tag_open'     => '<li class="page-item">',
            'num_tag_close'    => '</li>',
            'cur_tag_open'     => '<li class="page-item active"><a class="page-link" href="javascript:void(0);">',
            'cur_tag_close'    => '</a></li>',
        ];
        $config["base_url"] = base_url("news/page");
        $config["first_url"] = base_url("news");
        $config["total_rows"] = $this->UserModel->news_count_user_db_get();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $current_page = $this->uri->segment(3, 0);
        $page_offset = max(($current_page - 1) * (int)$config["per_page"], 0);
        $data["news_list"] = $this->UserModel->news_pagination_user_db_get($config["per_page"], $page_offset);
        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $this->load->view("users/contents/NewsList", $data);
    }

    public function news_list_target($category_name)
    {
        if (is_numeric($category_name)) {
            redirect(base_url("news"));
        }
        $data["user_page_name"] = ucfirst($category_name) . " News";
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $config = [
            'first_link'       => '<i class="linearicons-arrow-left"></i>',
            'last_link'        => '<i class="linearicons-arrow-right"></i>',
            'next_link'        => FALSE,
            'prev_link'        => FALSE,
            'full_tag_open'    => '<div class="py-3 py-md-4 mt-2 mt-sm-0 mt-lg-5 border-top border-bottom"><ul class="pagination justify-content-center">',
            'full_tag_close'   => '</ul></div>',
            'first_tag_open'   => '<li class="page-item">',
            'first_tag_close'  => '</li>',
            'last_tag_open'    => '<li class="page-item">',
            'last_tag_close'   => '</li>',
            'next_tag_open'    => '<li class="page-item">',
            'next_tag_close'   => '</li>',
            'prev_tag_open'    => '<li class="page-item">',
            'prev_tag_close'   => '</li>',
            'num_tag_open'     => '<li class="page-item">',
            'num_tag_close'    => '</li>',
            'cur_tag_open'     => '<li class="page-item active"><a class="page-link" href="javascript:void(0);">',
            'cur_tag_close'    => '</a></li>',
        ];
        $uid_category_name = current(array_column(array_filter($data["categories_list"], function ($category_item) use ($category_name) {
            return strtolower(base64_decode(json_decode($category_item["c_name"], TRUE)["en"])) == $category_name;
        }), "c_uid"));
        if (is_null($uid_category_name) || empty($uid_category_name)) {
            redirect(base_url("news"));
        }
        $breadcrumb_category = current(array_filter($data["categories_list"], function ($category_item) use ($uid_category_name) {
            return $category_item["c_uid"] == $uid_category_name;
        }));
        $breadcrumb_category_name = base64_decode(json_decode($breadcrumb_category["c_name"], TRUE)[$this->session->userdata("site_lang")]);
        $data["breadcrumb_data"] = [
            "page_name" => $breadcrumb_category_name,
            "segment" => [
                $this->lang->line("breadcrumb_home") => base_url("home"),
                $this->lang->line("breadcrumb_news") => base_url("news"),
                $breadcrumb_category_name => base_url("news/" . strtolower($category_name))
            ],
            "img_file_name" => base_url("file_manager/categories/" . $breadcrumb_category["c_img"])
        ];
        $config["base_url"] = base_url("news/" . $category_name . "/page");
        $config["first_url"] = base_url("news/" . $category_name);
        $config["total_rows"] = $this->UserModel->news_count_user_db_get($uid_category_name);
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $config["use_page_numbers"] = TRUE;
        $current_page = $this->uri->segment(4, 0);
        $page_offset = max(($current_page - 1) * (int)$config["per_page"], 0);
        $data["news_list"] = $this->UserModel->news_pagination_user_db_get($config["per_page"], $page_offset, $uid_category_name);
        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $this->load->view("users/contents/NewsList", $data);
    }

    public function news_single($id)
    {
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);
        $data["news_recent_six"] = $this->UserModel->news_user_db_get(6);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["news_single_data"] = $this->UserModel->news_single_db_get($id);
        $data["partners_list"] = $this->UserModel->partners_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $data["user_page_name"] = htmlentities(base64_decode(json_decode($data["news_single_data"]["n_title"], TRUE)[$this->session->userdata("site_lang")]));
        $breadcrumb_news_title = base64_decode(json_decode($data["news_single_data"]["n_title"], TRUE)[$this->session->userdata("site_lang")]);
        $data["breadcrumb_data"] = [
            "page_name" => $breadcrumb_news_title,
            "segment" => [
                $this->lang->line("breadcrumb_home") => base_url("home"),
                $this->lang->line("breadcrumb_news") => base_url("news"),
                $breadcrumb_news_title => base_url("news-detail/" . $data["news_single_data"]["n_uid"])
            ],
            "img_file_name" => base_url("file_manager/news/" . $data["news_single_data"]["n_preview_img"])
        ];
        if (!empty($data["news_single_data"])) {
            $this->load->view("users/contents/SingleNews", $data);
        } else {
            redirect(base_url("news"));
        }
    }

    public function contacts()
    {
        $data["user_page_name"] = "Contacts";
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $data["breadcrumb_data"] = [
            "page_name" => $this->lang->line("breadcrumb_contacts"),
            "segment" => [
                $this->lang->line("breadcrumb_home") => base_url("home"),
                $this->lang->line("breadcrumb_contacts") => base_url("news/contacts")
            ],
            "img_file_name" => base_url("public/user/assets/images/breadcrumb/contact_bg.jpg")
        ];
        $this->load->view("users/contents/Contacts", $data);
    }

    public function about()
    {
        $data["user_page_name"] = "About";
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $data["breadcrumb_data"] = [
            "page_name" => $this->lang->line("breadcrumb_about"),
            "segment" => [
                $this->lang->line("breadcrumb_home") => base_url("home"),
                $this->lang->line("breadcrumb_about") => base_url("news/about")
            ],
            "img_file_name" => base_url("public/user/assets/images/breadcrumb/about_bg.jpg")
        ];
        $this->load->view("users/contents/About", $data);
    }

    public function categories()
    {
        $data["user_page_name"] = "Categories";
        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);
        $data["topbar"] = [
            "data" => $this->topbarInfo(),
            "options" => json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE)
        ];
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["about_data"] = $this->UserModel->about_user_db_get();
        $data["settings"] = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        $data["breadcrumb_data"] = [
            "page_name" => $this->lang->line("breadcrumb_categories"),
            "segment" => [
                $this->lang->line("breadcrumb_home") => base_url("home"),
                $this->lang->line("breadcrumb_categories") => base_url("categories")
            ],
            "img_file_name" => base_url("public/user/assets/images/breadcrumb/travel_bg.jpg")
        ];
        $config = [
            'first_link'       => '<i class="linearicons-arrow-left"></i>',
            'last_link'        => '<i class="linearicons-arrow-right"></i>',
            'next_link'        => FALSE,
            'prev_link'        => FALSE,
            'full_tag_open'    => '<div class="py-3 py-md-4 mt-2 mt-sm-0 mt-lg-5 border-top border-bottom"><ul class="pagination justify-content-center">',
            'full_tag_close'   => '</ul></div>',
            'first_tag_open'   => '<li class="page-item">',
            'first_tag_close'  => '</li>',
            'last_tag_open'    => '<li class="page-item">',
            'last_tag_close'   => '</li>',
            'next_tag_open'    => '<li class="page-item">',
            'next_tag_close'   => '</li>',
            'prev_tag_open'    => '<li class="page-item">',
            'prev_tag_close'   => '</li>',
            'num_tag_open'     => '<li class="page-item">',
            'num_tag_close'    => '</li>',
            'cur_tag_open'     => '<li class="page-item active"><a class="page-link" href="javascript:void(0);">',
            'cur_tag_close'    => '</a></li>',
        ];
        $config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["first_url"] = base_url("categories");
        $config["base_url"] = base_url("categories/page/");
        $config["total_rows"] = $this->UserModel->categories_count_user_db_get();
        $current_page = $this->uri->segment(3, 0);
        $page_offset = max(($current_page - 1) * (int)$config["per_page"], 0);
        $data["categories_list"] = $this->UserModel->categories_pagination_user_db_get($config["per_page"], $page_offset);
        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $this->load->view("users/contents/CategoryList", $data);
    }

    public function maintenance()
    {
        $settings = json_decode($this->UserModel->settings_db_get()["s_data"] ?? NULL, FALSE);
        if ($settings->under_construction && !$this->session->userdata("admin_auth")) {
            $this->load->view("users/contents/Maintenance");
        } else {
            redirect(base_url("home"));
        }
    }
    /*=====GLOBAL USERS PAGES - ENDED=====*/





    public function crud_subscribe_action()
    {
        $subscriber_email = $this->input->post("subscriber_email", TRUE);
        $subscribers_data = $this->UserModel->subscribers_user_db_get();
        if (filter_var($subscriber_email, FILTER_VALIDATE_EMAIL)) {
            $existing_subscriber_key = array_search($subscriber_email, array_column($subscribers_data, "s_email"));
            if ($existing_subscriber_key !== FALSE) {
                $existing_subscriber = $subscribers_data[$existing_subscriber_key];
                $data = [
                    "s_email" => $subscriber_email,
                    "s_status" => !$existing_subscriber["s_status"],
                ];
                $this->UserModel->subscribers_user_db_update($existing_subscriber["s_uid"], $data);
                redirect(base_url("home"));
            } else {
                $data = [
                    "s_email" => $subscriber_email,
                    "s_status" => TRUE,
                ];
                $this->UserModel->subscribers_user_db_insert($data);
                redirect(base_url("home"));
            }
        } else {
            redirect(base_url("home"));
        }
    }

    public function feedback_submit_action(){
        $varka = $this->input->post("",TRUE);
    }
}
