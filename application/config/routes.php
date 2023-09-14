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

/*=====PARTNERS CRUD - START=====*/
$route["partners-create"]               = "AdminController/crud_partners_create";
$route["partners-create-action"]        = "AdminController/crud_partners_create_action";
$route["partners-list"]                 = "AdminController/crud_partners_list";
$route["partners-edit/(.*)"]            = "AdminController/crud_partners_edit/$1";
$route["partners-edit-action/(.*)"]     = "AdminController/crud_partners_edit_action/$1";
$route["partners-delete/(.*)"]          = "AdminController/crud_partners_delete/$1";
/*=====PARTNERS CRUD - ENDED=====*/


/*=====ADMIN CONTROLLER - ENDED=====*/