<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']   = 'main';
$route['404_override']         = 'error404';
$route['translate_uri_dashes'] = FALSE;

## BACKEND MAIN WEB ROUTE
$route['check_login']           = 'login/auth';
$route['admin_dashboard']       = 'login/dashboard';
$route['login']                 = 'login/index';
$route['logout']                = 'login/logout';
$route['dashboard']             = 'login/dashboard';
$route['chart_visit']           = 'login/get_data_visit';
$route['manage']                = 'login/manage';
$route['store_manage']          = 'login/store';
$route['destroy_account']       = 'login/destroy';
$route['update_status_account'] = 'login/update_status';
$route['reset_password']        = 'login/reset_password';
## END BACKEND MAIN WEB ROUTE

## PROFILE
$route['b_profile']       = 'profile/b_index';
$route['update_profile']  = 'profile/update';
## END PROFILE

## FAQ
$route['b_faq']           = 'faq/b_index';
$route['create_faq']      = 'faq/create';
$route['store_faq']       = 'faq/store';
$route['edit_faq/(:num)'] = 'faq/edit';
$route['update_faq']      = 'faq/update';
$route['destroy_faq']     = 'faq/destroy';
## END FAQ

## PROFILE
$route['b_contact']      = 'contact/b_index';
$route['update_contact'] = 'contact/update';
$route['get_list_city'] = 'contact/get_list_city';
## END PROFILE

## GALLERY
$route['b_gallery']       = 'gallery/b_index';
$route['create_gallery']  = 'gallery/create';
$route['store_gallery']   = 'gallery/store';
//$route['update_faq']    = 'faq/update';
$route['destroy_gallery'] = 'gallery/destroy';
## END GALLERY

## FAQ
$route['b_menu']           = 'menu/b_index';
$route['create_menu']      = 'menu/create';
$route['store_menu']       = 'menu/store';
$route['edit_menu/(:num)'] = 'menu/edit';
$route['update_menu']      = 'menu/update';
$route['destroy_menu']     = 'menu/destroy';
## END FAQ

// END WEB ROUTE
