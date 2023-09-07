<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /*HERE FUNC CHECK TABLE COUNT > 0 RETURN 1 ELSE RETURN -1*/

    public function index()
    {
        $data["admin_page_name"] = "Dashboard";
        $this->load->view("admins/Index", $data);
    }

    /*TOPBAR CRUD - START*/

    public function crud_topbar_create()
    {
        $data["admin_page_name"] = "Topbar";
        $this->load->view("admins/Topbar/Create", $data);
    }

    /*TOPBAR CRUD - ENDED*/
}
