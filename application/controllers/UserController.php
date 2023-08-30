<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $infoData["page_title"] = "Home";
        $this->load->view("user/Index", $infoData);
    }
}
