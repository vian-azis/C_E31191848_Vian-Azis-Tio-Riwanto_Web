<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

	// Fungsi __construct (), PHP secara otomatis akan memanggil fungsi ini saat membuat / memanggil objek dari kelas ini. 
	function __construct()
    {
		// Pada konsep Inheritance, untuk memanggil atau menyertakan konstruktor dari parent class
		// agar saat overriding fungsi __construct() pada child class tidak menyebabkan error
        parent::__construct(); // '::' digunakan untuk mengakses method statis kelas, variabel statis, dan konstanta
        $this->load->library('lib_template'); // load libary 'lib_template'
        $this->load->model('admin/tabel/M_Grup'); // load model 'M_Grup'
    }

	public function index($var = null)
	{
		if (!empty($var)) {
			$data['edit'] = $this->M_Grup->getDataById($var)->result();
		}

		$data['grup'] = $this->M_Grup->getData()->result(); // memanggil kelas objek model M_Grup, method getData, dan diambil resultnya
		$konten = 'Admin/Konten/tabel/grup';
		$this->lib_template->views($konten, $data); // memanggil kelas libary lib_template, method views
	}

	public function tambah()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$grup = $this->input->post('grup'); 

		$data = array(
			'grup' => $grup
		);
		$this->M_Grup->inputData($data); // memanggil kelas objek model M_Grup, method inputData

		redirect(base_url('admin/tabel/grup'));
	}

	public function hapus()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$id_grup = $this->input->post('id_grup', TRUE);

		$result = $this->M_Grup->hapusData($id_grup); // memanggil kelas objek model M_Grup, method hapusData

		if ($result == TRUE) {

			$this->session->set_flashdata('success_flashData', 'Data berhasil dihapus.');
			redirect(base_url('admin/tabel/grup'));
		} else {

			$this->session->set_flashdata('error_flashData', 'Gagal menghapus dihapus.');
			redirect(base_url('admin/tabel/grup'));
		}

	}

	public function ubah()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$id = $this->input->post('id', TRUE);
		$id_grup = $this->input->post('id_grup', TRUE);
		$grup = $this->input->post('grup', TRUE);

		$data = array(
			'id_grup' => $id_grup,
			'grup' => $grup
		);

		$result = $this->M_Grup->ubahData($id, $data); // memanggil kelas objek model M_Grup, method ubahData
		
		if ($result == TRUE) {

			$this->session->set_flashdata('success_flashData', 'Data berhasil diubah.');
			redirect(base_url('admin/tabel/grup'));
		} else {

			$this->session->set_flashdata('error_flashData', 'Gagal menghapus diubah.');
			redirect(base_url('admin/tabel/grup'));
		}
	}
}
