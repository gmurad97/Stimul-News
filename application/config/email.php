<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*=====START - IMPORTANT MAIL SETTINGS=====*/
$config["protocol"]    = "smtp";
$config["smtp_host"]   = "smtp.mail.ru";
$config["smtp_port"]   = 465;
$config["smtp_crypto"] = "ssl";
$config["smtp_user"]   = "stimul.news@bk.ru";
$config["smtp_pass"]   = "eY6nfvzdHgpHjqMqwgar";
/*=====ENDED - IMPORTANT MAIL SETTINGS=====*/

/*=====START - NOT IMPORTANT MAIL SETTINGS=====*/
$config["useragent"]   = "StimulNewsClient-v3.3";
$config["wordwrap"]    = TRUE;
$config["mailtype"]    = "HTML";
$config["charset"]     = "UTF-8";
$config["validate"]    = TRUE;
$config["priority"]    = 1;
$config["crlf"]        = "\r\n";
$config["newline"]     = "\r\n";
/*=====ENDED - NOT IMPORTANT MAIL SETTINGS=====*/