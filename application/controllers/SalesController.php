<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SalesController extends CI_Controller 
{

	function __construct()
	{

		parent::__construct();
		
         $this->load->library('session');
         $this->load->helper('date'); 
		date_default_timezone_set('Asia/Kolkata');
	}

	// Dashbaord
	public function sales_dashboard()
	{
		$this->load->view('Sales_dashboard/dashboard');
	}
	// Vendor List
	public function sales_vendor_list()
	{
		$this->load->view('Sales_dashboard/vendor_list');
	}
	// Vendor List
	public function sales_vendor_profile()
	{
		$this->load->view('Sales_dashboard/vendor_details/vendor_profile');
	}
	// Vendor List
	public function sales_vendor_profile_header()
	{
		$this->load->view('Sales_dashboard/vendor_details/vendor_profile_header');
	}
	public function sales_vendor_new_order()
	{
		$this->load->view('Sales_dashboard/vendor_details/vendor_new_order');
	}
	public function sales_vendor_inprocess_order()
	{
		$this->load->view('Sales_dashboard/vendor_details/vendor_inprocess_order');
	}
	public function sales_vendor_completed_order()
	{
		$this->load->view('Sales_dashboard/vendor_details/vendor_completed_order');
	}
	public function sales_vendor_cancelled_order()
	{
		$this->load->view('Sales_dashboard/vendor_details/vendor_cancelled_order');
	}
	// Order Managment
	public function sales_vendor_order_details()
	{
		$this->load->view('Sales_dashboard/order_managment/order_details');
	}
	public function sales_new_order()
	{
		$this->load->view('Sales_dashboard/order_managment/new_order');
	}
	public function sales_inProcess_order()
	{
		$this->load->view('Sales_dashboard/order_managment/inProcess_order');
	}
	public function sales_completed_order()
	{
		$this->load->view('Sales_dashboard/order_managment/completed_order');
	}
	public function sales_cancelled_order()
	{
		$this->load->view('Sales_dashboard/order_managment/cancelled_order');
	}
	public function order_invoice()
	{
		$this->load->view('Sales_dashboard/order_managment/invoice');
	}
	public function sales_revenue_management()
	{
		$this->load->view('Sales_dashboard/revenue_management');
	}
	public function staff_profile()
	{
		$this->load->view('Sales_dashboard/sales_staff_profile');
	}
	public function sales_bill_management()
	{
		$this->load->view('Sales_dashboard/bill_management');
	}
}