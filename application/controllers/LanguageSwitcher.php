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

class LanguageSwitcher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function SwitchLang($lang = "en")
    {
        $selected_lang = strtolower(!empty($lang) ? $lang : "en");
        $allowed_lang = [
            "az",
            "en",
            "ru"
        ];
        if (in_array($selected_lang, $allowed_lang)) {
            $this->session->set_userdata("site_lang", $selected_lang);
        } else {
            $this->session->set_userdata("site_lang", "en");
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
}
