<?php
class Lingkaran
{
    function keliling($jari)
    {
        $keliling = 2 * 3.14 * $jari;
        echo "Luas Lingkaran dengan jari-jari : " . $jari . " ,Adalah = " . $keliling;
        return $keliling;
    }
    function luas($jari)
    {
        $luas = 3.14 * $jari * $jari;
        echo "Luas Lingkaran dengan jari-jari : " . $jari . " ,Adalah = " . $luas;
        return $luas;
    }
}
