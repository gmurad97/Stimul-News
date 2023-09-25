<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*=====START - IMPORTANT MAIL SETTINGS=====*/
$config["protocol"]    = "smtp";
$config["smtp_host"]   = "mail.flash.az";
$config["smtp_port"]   = 465;
$config["smtp_crypto"] = "ssl";
$config["smtp_user"]   = "stimul.news@flash.az";
$config["smtp_pass"]   = "Stimul0559918540News";

/*=====ENDED - IMPORTANT MAIL SETTINGS=====*/

/*=====START - NOT IMPORTANT MAIL SETTINGS=====*/
$config["useragent"] = "StimulNewsClient-v1.0";
$config["wordwrap"]  = TRUE;
$config["mailtype"]  = "html";
$config["charset"]   = "utf-8";
$config["validate"]  = TRUE;
$config["priority"]  = 3;
$config["crlf"]      = "\r\n";
$config["newline"]   = "\r\n";
/*=====ENDED - NOT IMPORTANT MAIL SETTINGS=====*/