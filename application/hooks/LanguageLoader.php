<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageLoader
{
    public function lang_initialize()
    {
        $CI = &get_instance();
        $CI->load->helper("language");
        $current_lang = $CI->session->userdata("site_lang");
        if ($current_lang) {
            $CI->lang->load("message", $current_lang);
        } else {
            $CI->session->set_userdata("site_lang", "en");
            $CI->lang->load("message", "en");
        }
    }
}
