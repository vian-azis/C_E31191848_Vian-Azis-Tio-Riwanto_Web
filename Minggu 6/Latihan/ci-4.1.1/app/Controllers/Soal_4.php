<?php

namespace App\Controllers;

use App\Models\Soal_4 as modelSoal_4;

class Soal_4 extends BaseController
{
        public function index()
        {
                $objekModel = new modelSoal_4();

                $data1 = array(
                        "var1" => $objekModel->getData1(),
                        "var2" => $objekModel->getData2(),
                );

                return view('soal_4', $data1); //file view
        }
}
