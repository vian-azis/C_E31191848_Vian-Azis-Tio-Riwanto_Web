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
        $data['mahasiswa'] = $this->Mahasiswa_model->getDataMahasiswa();

        $this->load->view('template/header');
        $this->load->view('mahasiswa/view_mahasiswa', $data);
        $this->load->view('template/footer');
    }

    public function prodi()
    {
        $data['prodi'] = $this->Mahasiswa_model->getDataProdi();

        $this->load->view('template/header');
        $this->load->view('prodi/view_prodi', $data);
        $this->load->view('template/footer');
    }

    public function angkatan()
    {
        $data['angkatan'] = $this->Mahasiswa_model->getDataAngkatan();

        $this->load->view('template/header');
        $this->load->view('angkatan/view_angkatan', $data);
        $this->load->view('template/footer');
    }

    public function profil()
    {
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}
