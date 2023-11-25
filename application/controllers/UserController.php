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
    /*=====LOCAL USER CONTROLLER FUNCTION - ENDED=====*/

    /*=====GLOBAL USERS CRUD - START =====*/
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
                redirect($_SERVER["HTTP_REFERER"]);
            } else {
                $data = [
                    "s_email" => $subscriber_email,
                    "s_status" => TRUE,
                ];
                $this->UserModel->subscribers_user_db_insert($data);
                redirect($_SERVER["HTTP_REFERER"]);
            }
        }
    }
    /*=====GLOBAL USERS CRUD - ENDED =====*/

    /*=====GLOBAL USERS PAGES - START=====*/
    public function index()
    {
        $data["user_page_name"] = "Home";
        $data["topbar"]["data"] = $this->topbarInfo();
        $data["topbar"]["options"] = json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE);
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["news_list"] = $this->UserModel->news_user_db_get(NULL);
        $data["news_recent_six"] = $this->UserModel->news_user_db_get(6);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["partners_list"] = $this->UserModel->partners_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $this->load->view("users/Index", $data);
    }

    public function news_list($category_name = NULL)
    {
        $data["topbar"]["data"] = $this->topbarInfo();
        $data["topbar"]["options"] = json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE);
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
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
        if (!is_null($category_name) && !empty($category_name)) {
            if (is_numeric($category_name)) {
                redirect(base_url("news"));
            }
            $data["user_page_name"] = ucfirst($category_name) . " News";
            $uid_category_name = current(array_column(array_filter($data["categories_list"], function ($category_item) use ($category_name) {
                return strtolower(base64_decode(json_decode($category_item["c_name"], TRUE)["en"])) == $category_name;
            }), "c_uid"));
            $data["breadcrumb_data"] = [
                "page_name" => json_decode($data["categories_list"][$uid_category_name - 1]["c_name"], TRUE),
                "img_file_name" => $data["categories_list"][$uid_category_name - 1]["c_img"]
            ];
            if (is_null($uid_category_name) || empty($uid_category_name)) {
                redirect(base_url("news"));
            }
            $config["per_page"] = 10;
            $config["uri_segment"] = 4;
            $config["use_page_numbers"] = TRUE;
            $current_page = !empty($this->uri->segment(4)) && !is_null($this->uri->segment(4)) && is_numeric($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            $page_offset = ($current_page - 1) * (int)$config["per_page"] < 0 ? 0 : ($current_page - 1) * (int)$config["per_page"];
            $data["news_list"] = $this->UserModel->news_pagination_user_db_get($config["per_page"], $page_offset, $uid_category_name);
            $config["base_url"] = base_url("news/category/" . $category_name);
            $config["total_rows"] = $this->UserModel->news_count_user_db_get($uid_category_name);
            if ($current_page > ceil((int)$config["total_rows"] / (int)$config["per_page"]))
                redirect(base_url("news/category/" . $category_name));
            $this->load->library("pagination");
            $this->pagination->initialize($config);
            $this->load->view("users/NewsList", $data);
        } else {
            $data["user_page_name"] = "News";
            $config["per_page"] = 5;
            $config["uri_segment"] = 2;
            $config["use_page_numbers"] = TRUE;
            $current_page = !empty($this->uri->segment(2)) && !is_null($this->uri->segment(2)) && is_numeric($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $page_offset = ($current_page - 1) * (int)$config["per_page"] < 0 ? 0 : ($current_page - 1) * (int)$config["per_page"];
            $data["news_list"] = $this->UserModel->news_pagination_user_db_get($config["per_page"], $page_offset);
            

            
            $config["base_url"] = base_url("news");
            $config["total_rows"] = $this->UserModel->news_count_user_db_get();
            if ($current_page > ceil((int)$config["total_rows"] / (int)$config["per_page"]))
                redirect(base_url("news/category/" . $category_name));
            $this->load->library("pagination");
            $this->pagination->initialize($config);
            $this->load->view("users/NewsList", $data);
        }
    }



























    public function contacts()
    {
    }

    public function about_us()
    {
        $data["user_page_name"] = "All News";
        $data["topbar"]["data"] = $this->topbarInfo();
        $data["topbar"]["options"] = json_decode($this->UserModel->topbar_user_db_get()["t_data"] ?? NULL, FALSE);
        $data["branding_data"] = json_decode($this->UserModel->branding_user_db_get()["b_data"] ?? NULL, FALSE);
        $data["categories_nav_ul"] = $this->UserModel->categories_user_db_get(5);
        $data["slider_list"] = $this->UserModel->slider_user_db_get();
        $data["contacts_data"] = json_decode($this->UserModel->contacts_user_db_get()["c_data"] ?? NULL, FALSE);
        $data["news_recent_three"] = $this->UserModel->news_user_db_get(3);
        $data["categories_list"] = $this->UserModel->categories_user_db_get(NULL);
        $this->load->view("users/About");
    }

    public function categories_list()
    {
    }






    /*=====GLOBAL USERS PAGES - ENDED=====*/
}
