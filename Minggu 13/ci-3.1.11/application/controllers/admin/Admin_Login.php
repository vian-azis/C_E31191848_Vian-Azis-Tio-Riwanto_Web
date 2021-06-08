<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Login');
		$this->load->helper('cookie');
	}

	public function index()
	{
		$konten = 'admin/konten/login';
		$this->load->view($konten);
	}

	public function login()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$remember = $this->input->post('remember', TRUE);

		$login_data = array(
			'username' => $username,
			'password' => $password,
		);

		$result = $this->M_Login->check_loginAdmin($login_data);

		if (!empty($result['status']) && $result['status'] === TRUE) {

			/**
			 * Create Session
			 */
			$session_array = array(
				'ADMIN_ID'  => $result['data']->id,
				'ADMIN_NAME'  => $result['data']->nama,
				'ADMIN_USERNAME'  => $result['data']->username,
				'USER_TYPE' => $result['data']->id_grup 
			);

			//Set Cookie
			if (!empty($remember)) {
				$time = time() + (86400 * 30);
				set_cookie('ADMIN_USERNAME', $username, $time);
			} else {
				delete_cookie('ADMIN_USERNAME');
			}

			$this->session->set_userdata($session_array);

			$this->session->set_flashdata('success_flashData', 'Login Success');
			redirect(base_url('admin/'));
		} else {
			$this->session->set_flashdata('error_flashData', 'Invalid Email/Password.');
			redirect(base_url('admin/login'));
		}
	}

	public function logout()
	{

		/**
		 * Remove Session Data
		 */
		$remove_sessions = array('ADMIN_ID', 'ADMIN_NAME', 'ADMIN_USERNAME', 'USER_TYPE');
		$this->session->unset_userdata($remove_sessions);

		$this->session->set_flashdata('success_flashData', 'Anda Berhasil Logout!');
		redirect(base_url('admin/login'));
	}
}
