<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*=====START - IMPORTANT MAIL SETTINGS=====*/
$config["protocol"]    = "smtp";
$config["smtp_host"]   = "smtp.titan.email";
$config["smtp_port"]   = 465;
$config["smtp_crypto"] = "ssl";
$config["smtp_user"]   = "murad.dev@carsleon.com";
$config["smtp_pass"]   = "epQ@g~l7r(@lNs_";
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