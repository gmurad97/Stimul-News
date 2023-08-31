<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["page_title_name"] = "Home";
        $this->load->view("users/Index", $data);
    }
}
