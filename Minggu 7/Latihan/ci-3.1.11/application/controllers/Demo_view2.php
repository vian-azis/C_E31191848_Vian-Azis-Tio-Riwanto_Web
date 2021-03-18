<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_view2 extends CI_Controller {
	public function index()
	{
		$this->load->view('content_2/demoview');
	}
}
