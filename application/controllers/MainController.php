<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller 
{

	function __construct()
	{

		parent::__construct();
		
         $this->load->library('session');
         $this->load->helper('date'); 
		date_default_timezone_set('Asia/Kolkata');
	}
	
	
}
?>