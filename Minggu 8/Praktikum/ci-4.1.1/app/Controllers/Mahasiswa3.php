<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa3 extends BaseController
{
    private $data;

    function __construct()
    {
        $objekModel = new Mahasiswa_model();
        $this->data['mahasiswa'] = $objekModel->getData();
    }

    public function index()
    {
        $data = $this->data;
        return view('view_mahasiswa2', $data);
    }

    public function profil()
    {
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}
