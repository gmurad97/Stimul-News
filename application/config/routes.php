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
$route["logo-create"]                 = "AdminController/crud_logo_create";
$route["logo-create-action"]          = "AdminController/crud_logo_create_action";
$route["logo-edit"]                   = "AdminController/crud_logo_edit";
$route["logo-edit-action"]            = "AdminController/crud_logo_edit_action";
$route["logo-delete"]                 = "AdminController/crud_logo_delete";
/*=====LOGO CRUD - ENDED=====*/




/*=====ADMIN CONTROLLER - ENDED=====*/