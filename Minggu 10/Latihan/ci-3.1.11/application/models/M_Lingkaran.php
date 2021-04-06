<?php
class M_Lingkaran extends CI_Model
{
    public function getKeliling($var)
    {
        return $this->lingkaran->keliling($var);
    }

    public function getLuas($var)
    {
        return $this->lingkaran->luas($var);
    }
}
