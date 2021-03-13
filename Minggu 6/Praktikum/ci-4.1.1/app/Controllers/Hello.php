<?php

namespace App\Controllers;

use App\Models\Hello_model as Hello_model;

class Hello extends BaseController
{
	public function index()
	{
		// memuat objek model 'Hello_model'
        $this->hello_model = new Hello_model();

        //Pengambilkan objek dari kelas Hello_model dan dimuat di var $model
        $model = $this->hello_model;

        //Mengambil data dari model
        $a = $model->txt;

        //Membuat data yang akan dikirim ke View
        $data['teks'] = $a;

        // Memanggil file View
        return view('helloview'); //file view
	}
}
