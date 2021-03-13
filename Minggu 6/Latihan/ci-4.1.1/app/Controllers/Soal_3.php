<?php

namespace App\Controllers;

use App\Models\Soal_3 as modelSoal_3;

class Soal_3 extends BaseController
{
	public function index()
	{
        $objekModel = new modelSoal_3();

        $data = $objekModel->getData();

        echo $data;
	}
}
