<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa2 extends BaseController
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
        $data['mahasiswa'] = [
            ["nama" => "Kim Jefry", "prodi" => "MIF"],
            ["nama" => "Ahmad Kurniawan", "prodi" => "TKK"],
            ["nama" => "Budi Sudarsono", "prodi" => "TIF"]
        ];
        return view('view_mahasiswa2', $data);
    }

    public function profil()
    {
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}
