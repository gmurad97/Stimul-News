<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*=====START - IMPORTANT MAIL SETTINGS=====*/
$config["protocol"]    = "smtp";
$config["smtp_host"]   = "smtp.mail.com";
$config["smtp_port"]   = 465;
$config["smtp_crypto"] = "ssl";
$config["smtp_user"]   = "-----------";
$config["smtp_pass"]   = "-----------------";
/*=====ENDED - IMPORTANT MAIL SETTINGS=====*/

/*=====START - NOT IMPORTANT MAIL SETTINGS=====*/
$config["useragent"]   = "StimulNewsClient-v3.2";
$config["wordwrap"]    = TRUE;
$config["mailtype"]    = "HTML";
$config["charset"]     = "UTF-8";
$config["validate"]    = TRUE;
$config["priority"]    = 1;
$config["crlf"]        = "\r\n";
$config["newline"]     = "\r\n";
/*=====ENDED - NOT IMPORTANT MAIL SETTINGS=====*/