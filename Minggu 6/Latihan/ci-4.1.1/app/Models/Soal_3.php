<?php

namespace App\Models;

use CodeIgniter\Model;

class Soal_3 extends Model
{
    private $str = '<p>Hello Wolrd dari CI Model</p><a href="../">Kembali ke Index</a>';

    public function getData()
    {
        return $this->str;
    }
}