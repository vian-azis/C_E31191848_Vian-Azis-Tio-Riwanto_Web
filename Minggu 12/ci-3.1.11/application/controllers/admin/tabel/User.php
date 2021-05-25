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

	public function index($var = null)
	{
		$data['user'] = $this->M_User->getData()->result();  // memanggil kelas objek model M_User, method getData, dan diambil resultnya
		$data['grup'] = $this->M_Grup->getData()->result(); // memanggil kelas objek model M_Grup, method getData, dan diambil resultnya
		
		if (!empty($var)) {
			$data['edit'] = $this->M_User->getDataById($var)->result();
		}

		$konten = 'Admin/Konten/tabel/user';
		$this->lib_template->views($konten, $data); // memanggil kelas libary lib_template, method views
	}

	public function tambah()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$username = $this->input->post('username');
		$password = password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT);
		$nama = $this->input->post('nama');
		$id_grup = $this->input->post('id_grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'id_grup' => $id_grup
		);
		$this->M_User->inputData($data); // memanggil kelas objek model M_User, method inputData

		redirect(base_url('admin/tabel/user'));
	}

	public function hapus()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$id = $this->input->post('id', TRUE);

		$result = $this->M_User->hapusData($id); // memanggil kelas objek model M_User, method hapusData

		if ($result == TRUE) {

			$this->session->set_flashdata('success_flashData', 'Data berhasil dihapus.');
			redirect(base_url('admin/tabel/user'));
		} else {

			$this->session->set_flashdata('error_flashData', 'Gagal menghapus dihapus.');
			redirect(base_url('admin/tabel/user'));
		}

	}

	public function ubah()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT);
		$nama = $this->input->post('nama');
		$id_grup = $this->input->post('id_grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'id_grup' => $id_grup
		);

		$result = $this->M_User->ubahData($id, $data); // memanggil kelas objek model M_User, method ubahData
		
		if ($result == TRUE) {

			$this->session->set_flashdata('success_flashData', 'Data berhasil diubah.');
			redirect(base_url('admin/tabel/user'));
		} else {

			$this->session->set_flashdata('error_flashData', 'Gagal menghapus diubah.');
			redirect(base_url('admin/tabel/user'));
		}
	}
}
