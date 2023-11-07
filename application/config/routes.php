<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route["default_controller"]    = "UserController/index";
$route["404_override"]          = "";
$route["translate_uri_dashes"]  = FALSE;

/*=====ADMIN CONTROLLER - START=====*/
$route["admin/auth"]                           = "AdminController/login";
$route["admin/auth-action"]                    = "AdminController/login_action";
$route["admin/dashboard"]                      = "AdminController/dashboard";
$route["admin/gpt"]                            = "AdminController/cgpt";
$route["admin/api/gpt/(.*)"]                   = "AdminController/cgpt_action/$1";

/*=====TOPBAR CRUD - START=====*/
$route["admin/topbar-create"]                  = "AdminController/crud_topbar_create";
$route["admin/topbar-create-action"]           = "AdminController/crud_topbar_create_action";
$route["admin/topbar-edit"]                    = "AdminController/crud_topbar_edit";
$route["admin/topbar-edit-action"]             = "AdminController/crud_topbar_edit_action";
$route["admin/topbar-delete"]                  = "AdminController/crud_topbar_delete";
/*=====TOPBAR CRUD - ENDED=====*/

/*=====BRANDING CRUD - START=====*/
$route["admin/branding-create"]                = "AdminController/crud_branding_create";
$route["admin/branding-create-action"]         = "AdminController/crud_branding_create_action";
$route["admin/branding-edit"]                  = "AdminController/crud_branding_edit";
$route["admin/branding-edit-action"]           = "AdminController/crud_branding_edit_action";
$route["admin/branding-delete"]                = "AdminController/crud_branding_delete";
/*=====BRANDING CRUD - ENDED=====*/

/*=====PARTNERS CRUD - START=====*/
$route["admin/partners-create"]                = "AdminController/crud_partners_create";
$route["admin/partners-create-action"]         = "AdminController/crud_partners_create_action";
$route["admin/partners-list"]                  = "AdminController/crud_partners_list";
$route["admin/partners-edit/(.*)"]             = "AdminController/crud_partners_edit/$1";
$route["admin/partners-edit-action/(.*)"]      = "AdminController/crud_partners_edit_action/$1";
$route["admin/partners-delete/(.*)"]           = "AdminController/crud_partners_delete/$1";
/*=====PARTNERS CRUD - ENDED=====*/

/*=====CATEGORIES CRUD - START=====*/
$route["admin/categories-create"]              = "AdminController/crud_categories_create";
$route["admin/categories-create-action"]       = "AdminController/crud_categories_create_action";
$route["admin/categories-list"]                = "AdminController/crud_categories_list";
$route["admin/categories-edit/(.*)"]           = "AdminController/crud_categories_edit/$1";
$route["admin/categories-edit-action/(.*)"]    = "AdminController/crud_categories_edit_action/$1";
$route["admin/categories-delete/(.*)"]         = "AdminController/crud_categories_delete/$1";
/*=====CATEGORIES CRUD - ENDED=====*/

/*=====NEWS CRUD - START=====*/
$route["admin/news-create"]                    = "AdminController/crud_news_create";
$route["admin/news-create-action"]             = "AdminController/crud_news_create_action";
$route["admin/news-list"]                      = "AdminController/crud_news_list";
$route["admin/news-detail/(.*)"]               = "AdminController/crud_news_detail/$1";
$route["admin/news-edit/(.*)"]                 = "AdminController/crud_news_edit/$1";
$route["admin/news-edit-action/(.*)"]          = "AdminController/crud_news_edit_action/$1";
$route["admin/news-delete/(.*)"]               = "AdminController/crud_news_delete/$1";
/*=====NEWS CRUD - ENDED=====*/

/*=====SLIDER CRUD - START=====*/
$route["admin/slider-create"]                  = "AdminController/crud_slider_create";
$route["admin/slider-custom-create-action"]    = "AdminController/crud_slider_custom_create_action";
$route["admin/slider-news-create-action"]      = "AdminController/crud_slider_news_create_action";
$route["admin/slider-list"]                    = "AdminController/crud_slider_list";
$route["admin/slider-edit/(.*)"]               = "AdminController/crud_slider_edit/$1";
$route["admin/slider-edit-action/(.*)"]        = "AdminController/crud_slider_edit_action/$1";
$route["admin/slider-delete/(.*)"]             = "AdminController/crud_slider_delete/$1";
$route["admin/api/get-news-uid/(.*)/(.*)"]     = "AdminController/get_news_uid/$1/$2";
/*=====SLIDER CRUD - ENDED=====*/

/*=====GALLERY CRUD - START=====*/
$route["admin/gallery-create"]                 = "AdminController/crud_gallery_create";
$route["admin/gallery-create-action"]          = "AdminController/crud_gallery_create_action";
$route["admin/gallery-list"]                   = "AdminController/crud_gallery_list";
$route["admin/gallery-delete/(.*)"]            = "AdminController/crud_gallery_delete/$1";
/*=====GALLERY CRUD - ENDED=====*/

/*=====SUBSCRIBERS CRUD - START=====*/
$route["admin/subscribers-create"]             = "AdminController/crud_subscribers_create";
$route["admin/subscribers-create-action"]      = "AdminController/crud_subscribers_create_action";
$route["admin/subscribers-edit/(.*)"]          = "AdminController/crud_subscribers_edit/$1";
$route["admin/subscribers-edit-action/(.*)"]   = "AdminController/crud_subscribers_edit_action/$1";
$route["admin/subscribers-list"]               = "AdminController/crud_subscribers_list";
$route["admin/subscribers-delete/(.*)"]        = "AdminController/crud_subscribers_delete/$1";
/*=====SUBSCRIBERS CRUD - ENDED=====*/

/*=====ABOUT-US CRUD - START=====*/
$route["admin/about-us-create"]                = "AdminController/crud_about_us_create";
$route["admin/about-us-create-action"]         = "AdminController/crud_about_us_create_action";
$route["admin/about-us-edit"]                  = "AdminController/crud_about_us_edit";
$route["admin/about-us-edit-action"]           = "AdminController/crud_about_us_edit_action";
$route["admin/about-us-delete"]                = "AdminController/crud_about_us_delete";
/*=====ABOUT-US CRUD - ENDED=====*/

/*=====CONTACTS CRUD - START=====*/
$route["admin/contacts-create"]                = "AdminController/crud_contacts_create";
$route["admin/contacts-create-action"]         = "AdminController/crud_contacts_create_action";
$route["admin/contacts-edit"]                  = "AdminController/crud_contacts_edit";
$route["admin/contacts-edit-action"]           = "AdminController/crud_contacts_edit_action";
$route["admin/contacts-delete"]                = "AdminController/crud_contacts_delete";
/*=====CONTACTS CRUD - ENDED=====*/

/*=====SETTINGS CRUD - START=====*/
$route["admin/settings-create"]                = "AdminController/crud_settings_create";
$route["admin/settings-create-action"]         = "AdminController/crud_settings_create_action";
$route["admin/settings-edit"]                  = "AdminController/crud_settings_edit";
$route["admin/settings-edit-action"]           = "AdminController/crud_settings_edit_action";
$route["admin/settings-delete"]                = "AdminController/crud_settings_delete";
/*=====SETTINGS CRUD - ENDED=====*/

/*=====ADMIN CONTROLLER - ENDED=====*/



/*=====USER CONTROLLER - START=====*/
$route["home"] = "UserController/index";
/*=====USER CONTROLLER - ENDED=====*/