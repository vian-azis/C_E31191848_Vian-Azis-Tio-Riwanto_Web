<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    public function getData()
    {
        $data_mahasiswa = [
            ["nama" => "Kim Jefry", "prodi" => "MIF"],
            ["nama" => "Ahmad Kurniawan", "prodi" => "TKK"],
            ["nama" => "Budi Sudarsono", "prodi" => "TIF"]
        ];
        return $data_mahasiswa;
    }
}
