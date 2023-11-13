<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Error404()
    {
        $current_route = $this->uri->uri_string();
        if (str_starts_with($current_route, "admin")) {
            $data["admin_page_name"] = "Page Not Found";
            $this->output->set_status_header(404);
            $this->load->view("admins/Error404", $data);
        } else {
            $data["user_page_name"] = "Page Not Found";
            $this->output->set_status_header(404);
            $this->load->view("users/Error404", $data);
        }
    }
}
