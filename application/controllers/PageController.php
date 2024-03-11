<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller 
{

	function __construct()
	{

		parent::__construct();
		
         $this->load->library('session');
         $this->load->helper('date'); 
		date_default_timezone_set('Asia/Kolkata');
	}
	//Log & Forgot Pwd
	public function index()
	{
		$this->load->view('index');
	}
	public function forgot_password()
	{
		$this->load->view('forgot_password');
	}

	// Link File
	public function css()
	{
		$this->load->view('link/css');
	}
	public function js()
	{
		$this->load->view('link/js');
	}

	// Common File
	public function header()
	{
		$this->load->view('common_file/header');
	}
	public function footer()
	{
		$this->load->view('common_file/footer');
	}

	
	// Dashbaord
	public function dashboard()
	{
		$this->load->view('Admin_dashboard/dashboard');
	}


	public function contact_no()
	{
		$this->load->view('Admin_dashboard/contact_no');
	}


	public function privacy_policy()
	{
		$this->load->view('Admin_dashboard/privacy_policy');
	}
	public function about_us()
	{
		$this->load->view('Admin_dashboard/about_us');
	}
	public function term_condition()
	{
		$this->load->view('Admin_dashboard/term_condition');
	}
	public function pending_approval()
	{
		$this->load->view('Admin_dashboard/pending_approval');
	}
	public function vendor_list()
	{
		$this->load->view('Admin_dashboard/vendor_list');
	}
	public function staff_list()
	{
		$this->load->view('Admin_dashboard/staff_list');
	}
	public function create_category()
	{
		$this->load->view('Admin_dashboard/create_category');
	}
	public function create_subcategory()
	{
		$this->load->view('Admin_dashboard/create_subcategory');
	}
	public function create_size()
	{
		$this->load->view('Admin_dashboard/create_size');
	}
	public function create_color()
	{
		$this->load->view('Admin_dashboard/create_color');
	}
	public function add_product()
	{
		$this->load->view('Admin_dashboard/add_product');
	}
	public function edit_product()
	{
		$this->load->view('Admin_dashboard/edit_product');
	}
	public function product_list()
	{
		$this->load->view('Admin_dashboard/product_list');
	}
	public function product_details()
	{
		$this->load->view('Admin_dashboard/product_details');
	}
	
	// order_managment
	public function new_order()
	{
		$this->load->view('Admin_dashboard/order_managment/new_order');
	}
	public function inProcess_order()
	{
		$this->load->view('Admin_dashboard/order_managment/inProcess_order');
	}
	public function completed_order()
	{
		$this->load->view('Admin_dashboard/order_managment/completed_order');
	}
	public function cancelled_order()
	{
		$this->load->view('Admin_dashboard/order_managment/cancelled_order');
	}
	public function order_details()
	{
		$this->load->view('Admin_dashboard/order_managment/order_details');
	}
	public function invoice()
	{
		$this->load->view('Admin_dashboard/order_managment/invoice');
	}

	public function stock_details()
	{
		$this->load->view('Admin_dashboard/stock_details');
	}
	public function product_wise_stock()
	{
		$this->load->view('Admin_dashboard/product_wise_stock');
	}
	public function coupon_code()
	{
		$this->load->view('Admin_dashboard/coupon_code');
	}
	public function bill_management()
	{
		$this->load->view('Admin_dashboard/bill_management');
	}
	public function stock_history()
	{
		$this->load->view('Admin_dashboard/stock_history');
	}

	public function revenue_management()
	{
		$this->load->view('Admin_dashboard/revenue_management');
	}
	public function push_notification()
	{
		$this->load->view('Admin_dashboard/push_notification');
	}
	public function pending_vendor_profile()
	{
		$this->load->view('Admin_dashboard/pending_vendor_profile');
	}
	public function banner_management()
	{
		$this->load->view('Admin_dashboard/banner_management');
	}
	public function top_banner_management()
	{
		$this->load->view('Admin_dashboard/top_banner_management');
	}
	public function admin_profile()
	{
		$this->load->view('Admin_dashboard/admin_profile');
	}
	public function add_staff()
	{
		$this->load->view('Admin_dashboard/add_staff');
	}
	public function staff_roles()
	{
		$this->load->view('Admin_dashboard/staff_roles');
	}
	public function sales_staff_list()
	{
		$this->load->view('Admin_dashboard/sales_staff_list');
	}
	public function sales_staff_profile()
	{
		$this->load->view('Admin_dashboard/sales_staff_profile');
	}
	// vendor Profile
	public function vendor_new_order()
	{
		$this->load->view('Admin_dashboard/vendor_details/vendor_new_order');
	}
	public function vendor_profile()
	{
		$this->load->view('Admin_dashboard/vendor_details/vendor_profile');
	}
	public function vendor_inprocess_order()
	{
		$this->load->view('Admin_dashboard/vendor_details/vendor_inprocess_order');
	}
	public function vendor_completed_order()
	{
		$this->load->view('Admin_dashboard/vendor_details/vendor_completed_order');
	}
	public function vendor_cancelled_order()
	{
		$this->load->view('Admin_dashboard/vendor_details/vendor_cancelled_order');
	}
}