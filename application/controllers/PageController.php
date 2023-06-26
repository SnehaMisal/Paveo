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

	public function forgot_password()
	{
		$this->load->view('forgot_password');
	}
	// Dashbaord
	public function dashboard()
	{
		$this->load->view('dashboard');
	}




	public function push_notification()
	{
		$this->load->view('push_notification');
	}
	public function privacy_policy()
	{
		$this->load->view('privacy_policy');
	}
	public function term_condition()
	{
		$this->load->view('term_condition');
	}
	public function pending_approval()
	{
		$this->load->view('pending_approval');
	}
	public function vendor_list()
	{
		$this->load->view('vendor_list');
	}
	public function staff_list()
	{
		$this->load->view('staff_list');
	}
	public function create_category()
	{
		$this->load->view('create_category');
	}
}