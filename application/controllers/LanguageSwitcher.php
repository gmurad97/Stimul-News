<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
