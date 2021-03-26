<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    private $data;

    function __construct()
    {
        $objekModel = new Mahasiswa_model();
        $this->data['info'] = $objekModel->getData();
    }

    public function index()
    {
        $data = $this->data;
        $data['nama'] = "Kim Jefry";
        $data['prodi'] = "MIF";
        return view('view_mahasiswa', $data);
    }

    public function profil()
    {
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}
