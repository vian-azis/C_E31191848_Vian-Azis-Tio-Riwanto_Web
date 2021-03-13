<?php

namespace App\Models;

use CodeIgniter\Model;

class Home extends Model
{
    private $str = "Hello Vian Azis Tio Riwanto (E31191848 / GolonganC)";

    public function getData()
    {
        return $this->str;
    }
}