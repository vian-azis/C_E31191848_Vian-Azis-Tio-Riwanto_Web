<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// Fungsi __construct (), PHP secara otomatis akan memanggil fungsi ini saat membuat / memanggil objek dari kelas ini. 
	function __construct()
    {
		// Pada konsep Inheritance, untuk memanggil atau menyertakan konstruktor dari parent class
		// agar saat overriding fungsi __construct() pada child class tidak menyebabkan error
        parent::__construct(); // '::' digunakan untuk mengakses method statis kelas, variabel statis, dan konstanta
        $this->load->library('lib_template'); // load libary 'lib_template'
        $this->load->model('admin/tabel/M_User'); // load model 'M_User'
        $this->load->model('admin/tabel/M_Grup'); // load model 'M_Grup'
    }

	public function index()
	{
		$data['user'] = $this->M_User->getData()->result();  // memanggil kelas objek model M_User, method getData, dan diambil resultnya
		$data['grup'] = $this->M_Grup->getData()->result(); // memanggil kelas objek model M_Grup, method getData, dan diambil resultnya
		$konten = 'Admin/Konten/tabel/user';
		$this->lib_template->views($konten, $data); // memanggil kelas libary lib_template, method views
	}

	public function tambah()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$id_grup = $this->input->post('id_grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'id_grup' => $id_grup
		);
		$this->M_User->inputData($data,'tm_user'); // memanggil kelas objek model M_User, method inputData

		redirect(base_url('admin/tabel/user'));
	}
}
