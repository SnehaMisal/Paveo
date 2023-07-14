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


$route['privacy_policy'] = 'PageController/privacy_policy';
$route['about_us'] = 'PageController/about_us';
$route['term_condition'] = 'PageController/term_condition';
$route['pending_approval'] = 'PageController/pending_approval';
$route['vendor_list'] = 'PageController/vendor_list';
$route['staff_list'] = 'PageController/staff_list';
$route['create_category'] = 'PageController/create_category';
$route['create_size'] = 'PageController/create_size';
$route['create_color'] = 'PageController/create_color';
$route['add_product'] = 'PageController/add_product';
$route['edit_product'] = 'PageController/edit_product';
$route['product_list'] = 'PageController/product_list';
$route['product_details'] = 'PageController/product_details';
// Order Managment
$route['new_order'] = 'PageController/new_order';
$route['inProcess_order'] = 'PageController/inProcess_order';
$route['completed_order'] = 'PageController/completed_order';
$route['cancelled_order'] = 'PageController/cancelled_order';
$route['order_details'] = 'PageController/order_details';
$route['invoice'] = 'PageController/invoice';

$route['stock_details'] = 'PageController/stock_details';
$route['product_wise_stock'] = 'PageController/product_wise_stock';
$route['bill_management'] = 'PageController/bill_management';
$route['stock_history'] = 'PageController/stock_history';

$route['revenue_management'] = 'PageController/revenue_management';
$route['push_notification'] = 'PageController/push_notification';
$route['pending_vendor_profile'] = 'PageController/pending_vendor_profile';
$route['banner_management'] = 'PageController/banner_management';
$route['vendor_profile'] = 'PageController/vendor_profile';
$route['admin_profile'] = 'PageController/admin_profile';
$route['add_staff'] = 'PageController/add_staff';
$route['sales_staff_list'] = 'PageController/sales_staff_list';
$route['sales_staff_profile'] = 'PageController/sales_staff_profile';
$route['vendor_new_order'] = 'PageController/vendor_new_order';
$route['vendor_inprocess_order'] = 'PageController/vendor_inprocess_order';
$route['vendor_completed_order'] = 'PageController/vendor_completed_order';
$route['vendor_cancelled_order'] = 'PageController/vendor_cancelled_order';


// Sales Dashboard
$route['sales_dashboard'] = 'SalesController/sales_dashboard';
$route['sales_vendor_list'] = 'SalesController/sales_vendor_list';
$route['sales_vendor_profile'] = 'SalesController/sales_vendor_profile';
$route['sales_vendor_profile_header'] = 'SalesController/sales_vendor_profile_header';
$route['sales_vendor_new_order'] = 'SalesController/sales_vendor_new_order';
$route['sales_vendor_inprocess_order'] = 'SalesController/sales_vendor_inprocess_order';
$route['sales_vendor_completed_order'] = 'SalesController/sales_vendor_completed_order';
$route['sales_vendor_cancelled_order'] = 'SalesController/sales_vendor_cancelled_order';
$route['sales_vendor_order_details'] = 'SalesController/sales_vendor_order_details';
$route['sales_new_order'] = 'SalesController/sales_new_order';
$route['sales_inProcess_order'] = 'SalesController/sales_inProcess_order';
$route['sales_completed_order'] = 'SalesController/sales_completed_order';
$route['sales_cancelled_order'] = 'SalesController/sales_cancelled_order';
$route['order_invoice'] = 'SalesController/order_invoice';
$route['sales_revenue_management'] = 'SalesController/sales_revenue_management';
$route['staff_profile'] = 'SalesController/staff_profile';
$route['sales_bill_management'] = 'SalesController/sales_bill_management';