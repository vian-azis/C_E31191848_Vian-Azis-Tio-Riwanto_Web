<?php

namespace App\Models;

use CodeIgniter\Model;

class Soal_4 extends Model
{
    private $str1 = array(
                    "var1_1" => "Ini adalah variabel 1 pada array index 0",
                    "var1_2" => "Ini adalah variabel 1 pada array index 1",
    );

    private $str2 = "Ini adalah variabel 2";

    public function getData1()
    {
        return $this->str1;
    }

    public function getData2()
    {
        return $this->str2;
    }
}
