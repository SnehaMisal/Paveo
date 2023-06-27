<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'PageController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Log & Forgot Pwd
$route['index'] = 'PageController/index';

// Link File
$route['css'] = 'PageController/css';
$route['js'] = 'PageController/js';

// Common File
$route['header'] = 'PageController/header';
$route['footer'] = 'PageController/footer';

$route['forgot_password'] = 'PageController/forgot_password';
//Dashboard
$route['dashboard'] = 'PageController/dashboard';

$route['push_notification'] = 'PageController/push_notification';

$route['privacy_policy'] = 'PageController/privacy_policy';
$route['term_condition'] = 'PageController/term_condition';
$route['pending_approval'] = 'PageController/pending_approval';
$route['vendor_list'] = 'PageController/vendor_list';
$route['staff_list'] = 'PageController/staff_list';
$route['create_category'] = 'PageController/create_category';
$route['create_size'] = 'PageController/create_size';
$route['create_color'] = 'PageController/create_color';
$route['add_product'] = 'PageController/add_product';
$route['product_list'] = 'PageController/product_list';
$route['new_order'] = 'PageController/new_order';