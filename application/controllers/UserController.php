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


    public function news_list()
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
        $config = [
            "base_url" => base_url("news/page"),
            "total_rows" => $this->UserModel->news_count_user_db_get(),
            "per_page" => 5,
            "uri_segment" => 3,
            "num_links" => 1,
            "use_page_numbers" => TRUE
        ];

        $config['first_link'] = '<i class="linearicons-arrow-left"></i>';
        $config['last_link'] = '<i class="linearicons-arrow-right"></i>';
        $config['next_link'] = FALSE;
        $config['prev_link'] = FALSE;
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["news_list"] = $this->UserModel->news_pagination_user_db_get($config["per_page"], $page);

        // Проверяем, существуют ли данные на этой странице
        if ($page > 0 && ($page - 1) * $config["per_page"] >= $config["total_rows"]) {
            redirect(base_url("news/page")); // Редиректим на первую страницу
        }


        $this->load->view("users/NewsList", $data);





        /* 
                $category_list_name = array_map(function ($item) {
            return strtolower(base64_decode(json_decode($item["c_name"], TRUE)["en"]));
        }, $data["categories_list"]);
        else if (in_array($category_name, $category_list_name)) {
            $data["news_list"] = array_values(array_filter($this->UserModel->news_user_db_get(NULL), function ($news_item) use ($category_name) {
                return strtolower(base64_decode(json_decode($news_item["c_name"], TRUE)["en"])) == $category_name;
            }));
            $this->load->view("users/NewsList", $data);
        } */
    }





    public function news_category($category_name)
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
        $config = [
            "base_url" => base_url("news-category".$category_name . "/page"),
            "total_rows" => $this->UserModel->news_count_user_db_get(),
            "per_page" => 5,
            "uri_segment" => 3,
            "num_links" => 1,
            "use_page_numbers" => TRUE
        ];

        $config['first_link'] = '<i class="linearicons-arrow-left"></i>';
        $config['last_link'] = '<i class="linearicons-arrow-right"></i>';
        $config['next_link'] = FALSE;
        $config['prev_link'] = FALSE;
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["news_list"] = $this->UserModel->news_pagination_user_db_get($config["per_page"], $page);

        // Проверяем, существуют ли данные на этой странице
        if ($page > 0 && ($page - 1) * $config["per_page"] >= $config["total_rows"]) {
            redirect(base_url("news/page")); // Редиректим на первую страницу
        }


        $this->load->view("users/NewsList", $data);





        
                $category_list_name = array_map(function ($item) {
            return strtolower(base64_decode(json_decode($item["c_name"], TRUE)["en"]));
        }, $data["categories_list"]);
        else if (in_array($category_name, $category_list_name)) {
            $data["news_list"] = array_values(array_filter($this->UserModel->news_user_db_get(NULL), function ($news_item) use ($category_name) {
                return strtolower(base64_decode(json_decode($news_item["c_name"], TRUE)["en"])) == $category_name;
            }));
            $this->load->view("users/NewsList", $data);
        }
    }





    /*=====GLOBAL USERS PAGES - ENDED=====*/
}
