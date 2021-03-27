<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['nama'] = "Kim Jefry";
        $data['prodi'] = "MIF";
        $this->load->view('view_mahasiswa', $data);
    }
    
    public function profil()
    {
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}
