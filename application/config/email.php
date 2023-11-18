<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*=====START - IMPORTANT MAIL SETTINGS=====*/
$config["protocol"]    = "smtp";
$config["smtp_host"]   = "mail.carsleon.com";
$config["smtp_port"]   = 25;
$config["smtp_crypto"] = "";
$config["smtp_user"]   = "murad.dev@carsleon.com";
$config["smtp_pass"]   = "xY2wQ0bM3r";
/*=====ENDED - IMPORTANT MAIL SETTINGS=====*/

/*=====START - NOT IMPORTANT MAIL SETTINGS=====*/
$config["useragent"]   = "StimulNewsClient-v2.1";
$config["wordwrap"]    = TRUE;
$config["mailtype"]    = "html";
$config["charset"]     = "utf-8";
$config["validate"]    = TRUE;
$config["priority"]    = 1;
$config["crlf"]        = "\r\n";
$config["newline"]     = "\r\n";
/*=====ENDED - NOT IMPORTANT MAIL SETTINGS=====*/