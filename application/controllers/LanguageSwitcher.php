<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ╔╗
 * ╠╠═ Author: Murad Gazymagomedov
 * ╠╠═ Username: gmurad97
 * ╠╠═ Version: 3.3
 * ║║
 * ╠╠═ Open Server Panel 5.4.3 Specs
 * ╠╠╠══ Modules
 * ╠╠╠╠═══ Http: Apache_2.4-PHP_8.0-8.1+Nginx_1.23
 * ╠╠╠╠═══ PHP: PHP_8.0
 * ╠╠╠╠═══ MySQL / MariaDB: MySQL-8.0-Win10
 * ╠╠╠══ Mail
 * ╠╠╠╠═══ Way to send e-mail: Send mail through a remote SMTP server
 * ╚╝
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
