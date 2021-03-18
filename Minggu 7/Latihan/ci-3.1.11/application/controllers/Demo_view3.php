<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_view3 extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('content_3/demoview');
	}
}
