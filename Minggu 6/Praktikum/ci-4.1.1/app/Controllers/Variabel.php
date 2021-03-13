<?php

namespace App\Controllers;

class Variabel extends BaseController
{
	public function index()
	{
		$data = ['variabel1'=>'Data variabel ke 1', 'variabel2'=>'Data bariabel ke 2'];

        return view('variabelView', $data);
	}
}
