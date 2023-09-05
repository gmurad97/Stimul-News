<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route["default_controller"]    = "UserController/index";
$route["404_override"]          = "";
$route["translate_uri_dashes"]  = FALSE;

/*=====USER CONTROLLER - START=====*/
$route["home"] = "UserController/index";



$route["404"] = "UserController/pageNotFound";
/*=====USER CONTROLLER - ENDED=====*/



/*=====ADMIN CONTROLLER - START=====*/

/*=====ADMIN CONTROLLER - ENDED=====*/