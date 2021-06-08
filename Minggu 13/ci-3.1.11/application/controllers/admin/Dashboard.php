<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		
		$data = array(
			'jmluser' => $this->M_User->getJumlahData()->result(),
			'jmlgrup' => $this->M_Grup->getJumlahData()->result()
		);
		$konten = 'Admin/Konten/dashboard';
		$this->lib_template->views($konten, $data); // memanggil kelas libary lib_template, method views
	}
}
