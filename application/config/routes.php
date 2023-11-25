<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route["default_controller"]    = "UserController";
$route["404_override"]          = "ErrorController/Error404";
$route["translate_uri_dashes"]  = FALSE;

/*==========ADMIN CONTROLLER - START==========*/

/*=====GLOBAL ROUTES - START=====*/
$route["admin/dashboard"]                      = "AdminController/dashboard";

/*AUTH & REG ROUTES - START*/
$route["admin/auth"]                           = "AdminController/login";
$route["admin/auth-action"]                    = "AdminController/login_action";
$route["admin/logout-action"]                  = "AdminController/logout_action";
$route["admin/register"]                       = "AdminController/register";
$route["admin/register-action"]                = "AdminController/register_action";
/*AUTH & REG ROUTES - ENDED*/

/*PROFILE ROUTES - START*/
$route["admin/profile-list"]                   = "AdminController/crud_profile_list";
$route["admin/profile-detail/(:any)"]            = "AdminController/crud_profile_detail/$1";
$route["admin/profile-edit/(:any)"]              = "AdminController/crud_profile_edit/$1";
$route["admin/profile-edit-action/(:any)"]       = "AdminController/crud_profile_edit_action/$1";
$route["admin/profile-delete/(:any)"]            = "AdminController/crud_profile_delete/$1";
/*PROFILE ROUTES - ENDED*/

/*AI GPT ROUTES - START*/
$route["admin/gpt"]                            = "AdminController/ai_gpt";
$route["admin/api/gpt/(:any)"]                   = "AdminController/ai_gpt_action/$1";
/*AI GPT ROUTES - ENDED*/

/*=====GLOBAL ROUTES - ENDED=====*/

/*=====TOPBAR ROUTES - START=====*/
$route["admin/topbar-create"]                  = "AdminController/crud_topbar_create";
$route["admin/topbar-create-action"]           = "AdminController/crud_topbar_create_action";
$route["admin/topbar-edit"]                    = "AdminController/crud_topbar_edit";
$route["admin/topbar-edit-action"]             = "AdminController/crud_topbar_edit_action";
$route["admin/topbar-delete"]                  = "AdminController/crud_topbar_delete";
/*=====TOPBAR ROUTES - ENDED=====*/

/*=====BRANDING ROUTES - START=====*/
$route["admin/branding-create"]                = "AdminController/crud_branding_create";
$route["admin/branding-create-action"]         = "AdminController/crud_branding_create_action";
$route["admin/branding-edit"]                  = "AdminController/crud_branding_edit";
$route["admin/branding-edit-action"]           = "AdminController/crud_branding_edit_action";
$route["admin/branding-delete"]                = "AdminController/crud_branding_delete";
/*=====BRANDING ROUTES - ENDED=====*/

/*=====PARTNERS ROUTES - START=====*/
$route["admin/partners-create"]                = "AdminController/crud_partners_create";
$route["admin/partners-create-action"]         = "AdminController/crud_partners_create_action";
$route["admin/partners-list"]                  = "AdminController/crud_partners_list";
$route["admin/partners-edit/(:any)"]             = "AdminController/crud_partners_edit/$1";
$route["admin/partners-edit-action/(:any)"]      = "AdminController/crud_partners_edit_action/$1";
$route["admin/partners-delete/(:any)"]           = "AdminController/crud_partners_delete/$1";
/*=====PARTNERS ROUTES - ENDED=====*/

/*=====CATEGORIES ROUTES - START=====*/
$route["admin/categories-create"]              = "AdminController/crud_categories_create";
$route["admin/categories-create-action"]       = "AdminController/crud_categories_create_action";
$route["admin/categories-list"]                = "AdminController/crud_categories_list";
$route["admin/categories-edit/(:any)"]           = "AdminController/crud_categories_edit/$1";
$route["admin/categories-edit-action/(:any)"]    = "AdminController/crud_categories_edit_action/$1";
$route["admin/categories-delete/(:any)"]         = "AdminController/crud_categories_delete/$1";
/*=====CATEGORIES ROUTES - ENDED=====*/

/*=====NEWS ROUTES - START=====*/
$route["admin/news-create"]                    = "AdminController/crud_news_create";
$route["admin/news-create-action"]             = "AdminController/crud_news_create_action";
$route["admin/news-list"]                      = "AdminController/crud_news_list";
$route["admin/news-detail/(:any)"]               = "AdminController/crud_news_detail/$1";
$route["admin/news-edit/(:any)"]                 = "AdminController/crud_news_edit/$1";
$route["admin/news-edit-action/(:any)"]          = "AdminController/crud_news_edit_action/$1";
$route["admin/news-delete/(:any)"]               = "AdminController/crud_news_delete/$1";
/*=====NEWS ROUTES - ENDED=====*/

/*=====SLIDER ROUTES - START=====*/
$route["admin/slider-create"]                  = "AdminController/crud_slider_create";
$route["admin/slider-custom-create-action"]    = "AdminController/crud_slider_custom_create_action";
$route["admin/slider-news-create-action"]      = "AdminController/crud_slider_news_create_action";
$route["admin/slider-list"]                    = "AdminController/crud_slider_list";
$route["admin/slider-edit/(:any)"]               = "AdminController/crud_slider_edit/$1";
$route["admin/slider-edit-action/(:any)"]        = "AdminController/crud_slider_edit_action/$1";
$route["admin/slider-delete/(:any)"]             = "AdminController/crud_slider_delete/$1";
/*=====SLIDER ROUTES - ENDED=====*/

/*=====GALLERY ROUTES - START=====*/
$route["admin/gallery-create"]                 = "AdminController/crud_gallery_create";
$route["admin/gallery-create-action"]          = "AdminController/crud_gallery_create_action";
$route["admin/gallery-list"]                   = "AdminController/crud_gallery_list";
$route["admin/gallery-delete/(:any)"]            = "AdminController/crud_gallery_delete/$1";
/*=====GALLERY ROUTES - ENDED=====*/

/*=====SUBSCRIBERS ROUTES - START=====*/
$route["admin/subscribers-create"]             = "AdminController/crud_subscribers_create";
$route["admin/subscribers-create-action"]      = "AdminController/crud_subscribers_create_action";
$route["admin/subscribers-edit/(:any)"]          = "AdminController/crud_subscribers_edit/$1";
$route["admin/subscribers-edit-action/(:any)"]   = "AdminController/crud_subscribers_edit_action/$1";
$route["admin/subscribers-list"]               = "AdminController/crud_subscribers_list";
$route["admin/subscribers-delete/(:any)"]        = "AdminController/crud_subscribers_delete/$1";
/*=====SUBSCRIBERS ROUTES - ENDED=====*/

/*=====ABOUT-US ROUTES - START=====*/
$route["admin/about-us-create"]                = "AdminController/crud_about_us_create";
$route["admin/about-us-create-action"]         = "AdminController/crud_about_us_create_action";
$route["admin/about-us-edit"]                  = "AdminController/crud_about_us_edit";
$route["admin/about-us-edit-action"]           = "AdminController/crud_about_us_edit_action";
$route["admin/about-us-delete"]                = "AdminController/crud_about_us_delete";
/*=====ABOUT-US ROUTES - ENDED=====*/

/*=====CONTACTS ROUTES - START=====*/
$route["admin/contacts-create"]                = "AdminController/crud_contacts_create";
$route["admin/contacts-create-action"]         = "AdminController/crud_contacts_create_action";
$route["admin/contacts-edit"]                  = "AdminController/crud_contacts_edit";
$route["admin/contacts-edit-action"]           = "AdminController/crud_contacts_edit_action";
$route["admin/contacts-delete"]                = "AdminController/crud_contacts_delete";
/*=====CONTACTS ROUTES - ENDED=====*/

/*=====SETTINGS ROUTES - START=====*/
$route["admin/settings-create"]                = "AdminController/crud_settings_create";
$route["admin/settings-create-action"]         = "AdminController/crud_settings_create_action";
$route["admin/settings-edit"]                  = "AdminController/crud_settings_edit";
$route["admin/settings-edit-action"]           = "AdminController/crud_settings_edit_action";
$route["admin/settings-delete"]                = "AdminController/crud_settings_delete";
$route["admin/settings-dump-db"]               = "AdminController/crud_settings_dump_db";
/*=====SETTINGS ROUTES - ENDED=====*/

/*==========ADMIN CONTROLLER - ENDED==========*/

/*=====USER CONTROLLER - START=====*/
$route["switch-lang/(:any)"]                   = "LanguageSwitcher/SwitchLang/$1";
$route["subscribe-action"]                     = "UserController/crud_subscribe_action";
$route["home"]                                 = "UserController/index";
$route["news"]                                 = "Usercontroller/news_list";
$route["news/(:num)"]                          = "Usercontroller/news_list/$1";
$route["news/category/(:any)"]                 = "Usercontroller/news_list/$1";
$route["news/category/(:any)/(:num)"]          = "Usercontroller/news_list/$1/$2";










$route["about"] = "UserController/about_us";
/*=====USER CONTROLLER - ENDED=====*/