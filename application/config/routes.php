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
$route["admin/dashboard"]                     = "AdminController/dashboard";

/*=====TOPBAR CRUD - START=====*/
$route["admin/topbar-create"]                 = "AdminController/crud_topbar_create";
$route["admin/topbar-create-action"]          = "AdminController/crud_topbar_create_action";
$route["admin/topbar-edit"]                   = "AdminController/crud_topbar_edit";
$route["admin/topbar-edit-action"]            = "AdminController/crud_topbar_edit_action";
$route["admin/topbar-delete"]                 = "AdminController/crud_topbar_delete";
/*=====TOPBAR CRUD - ENDED=====*/

/*=====LOGO CRUD - START=====*/
$route["admin/branding-create"]               = "AdminController/crud_branding_create";
$route["admin/branding-create-action"]        = "AdminController/crud_branding_create_action";
$route["admin/branding-edit"]                 = "AdminController/crud_branding_edit";
$route["admin/branding-edit-action"]          = "AdminController/crud_branding_edit_action";
$route["admin/branding-delete"]               = "AdminController/crud_branding_delete";
/*=====LOGO CRUD - ENDED=====*/

/*=====PARTNERS CRUD - START=====*/
$route["admin/partners-create"]               = "AdminController/crud_partners_create";
$route["admin/partners-create-action"]        = "AdminController/crud_partners_create_action";
$route["admin/partners-list"]                 = "AdminController/crud_partners_list";
$route["admin/partners-edit/(.*)"]            = "AdminController/crud_partners_edit/$1";
$route["admin/partners-edit-action/(.*)"]     = "AdminController/crud_partners_edit_action/$1";
$route["admin/partners-delete/(.*)"]          = "AdminController/crud_partners_delete/$1";
/*=====PARTNERS CRUD - ENDED=====*/

/*=====CATEGORIES CRUD - START=====*/
$route["admin/categories-create"]             = "AdminController/crud_categories_create";
$route["admin/categories-create-action"]      = "AdminController/crud_categories_create_action";
$route["admin/categories-list"]               = "AdminController/crud_categories_list";
$route["admin/categories-edit/(.*)"]          = "AdminController/crud_categories_edit/$1";
$route["admin/categories-edit-action/(.*)"]   = "AdminController/crud_categories_edit_action/$1";
$route["admin/categories-delete/(.*)"]        = "AdminController/crud_categories_delete/$1";
/*=====CATEGORIES CRUD - ENDED=====*/

/*=====CATEGORIES CRUD - START=====*/
$route["admin/news-create"]                   = "AdminController/crud_news_create";
$route["admin/news-create-action"]            = "AdminController/crud_news_create_action";
$route["admin/news-list"]                     = "AdminController/crud_news_list";
$route["admin/news-edit/(.*)"]                = "AdminController/crud_news_edit/$1";
$route["admin/news-edit-action/(.*)"]         = "AdminController/crud_news_edit_action/$1";
$route["admin/news-delete/(.*)"]              = "AdminController/crud_news_delete/$1";
/*=====CATEGORIES CRUD - ENDED=====*/


/*=====ADMIN CONTROLLER - ENDED=====*/