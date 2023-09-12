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
$route["dashboard"] = "AdminController/index";

/*=====TOPBAR CRUD - START=====*/
$route["topbar-create"]                 = "AdminController/crud_topbar_create";
$route["topbar-create-action"]          = "AdminController/crud_topbar_create_action";
$route["topbar-edit"]                   = "AdminController/crud_topbar_edit";
$route["topbar-edit-action"]            = "AdminController/crud_topbar_edit_action";
$route["topbar-delete"]                 = "AdminController/crud_topbar_delete";
/*=====TOPBAR CRUD - ENDED=====*/

/*=====LOGO CRUD - START=====*/
$route["branding-create"]               = "AdminController/crud_branding_create";
$route["branding-create-action"]        = "AdminController/crud_branding_create_action";
$route["branding-edit"]                 = "AdminController/crud_branding_edit";
$route["branding-edit-action"]          = "AdminController/crud_branding_edit_action";
$route["branding-delete"]               = "AdminController/crud_branding_delete";
/*=====LOGO CRUD - ENDED=====*/




/*=====ADMIN CONTROLLER - ENDED=====*/