<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    private $mahasiswa, $prodi, $angkatan;

    function __construct()
    {
        $objekModel = new Mahasiswa_model();
        $this->mahasiswa['mahasiswa'] = $objekModel->getDataMahasiswa();
        $this->prodi['prodi'] = $objekModel->getDataProdi();
        $this->angkatan['angkatan'] = $objekModel->getDataAngkatan();
    }

    public function index()
    {
        $data = $this->mahasiswa;
		echo view('template/header');
		echo view('mahasiswa/view_mahasiswa', $data);
		echo view('template/footer');
    }

    public function prodi()
    {
        $data = $this->prodi;
		echo view('template/header');
		echo view('prodi/view_prodi', $data);
		echo view('template/footer');
    }

    public function angkatan()
    {
        $data = $this->angkatan;
		echo view('template/header');
		echo view('angkatan/view_angkatan', $data);
		echo view('template/footer');
    }

    public function profil()
    {
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}
