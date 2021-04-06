<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Teslib extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('table');
		$this->load->model('Mahasiswa_model');
	}
	public function index()
	{
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('template/header');
		$this->load->view('view_teslib', $data);
		$this->load->view('template/footer');
	}
}
