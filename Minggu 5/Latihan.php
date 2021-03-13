<?php

interface hitungLuas {
    /*
    Karena pada kelas inteface tidak boleh ada property dan pada soal terdapat  
    kata "Buatlah interface yang bernama hitungLuas dengan property bernama ‘sisi’ ...".
    Maka saya asumsikan property 'sisi' sebagai 'PHP Function – Arguments'
    Sehingga : 
    - Misal pada segitiga maka sisi juga sebagai alas 
    - Misal pada lingkarang sisi sebagai jari-jari.
    */
    public function hitungLuasPersegi($sisi);

    public function hitungLuasSegitiga($sisi);

    public function hitungLuasLingkaran($sisi);
}

class Persegi implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return $sisi * $sisi;
    }

    public function hitungLuasSegitiga($sisi)
    {
        return "Error : Objek bukanlah segitiga.";
    }

    public function hitungLuasLingkaran($sisi)
    {
        return "Error : Objek bukanlah Lingkaran";
    }
}

class Segitiga implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return "Error : Objek bukanlah persegi";
    }

    public function hitungLuasSegitiga($sisi)
    {
        return (1/2) * $sisi * $sisi;
    }

    public function hitungLuasLingkaran($sisi)
    {
        return "Error : Objek bukanlah lingkaran";
    }
}

class Lingkaran implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return "Error : Objek bukanlah persegi";
    }

    public function hitungLuasSegitiga($sisi)
    {
        return "Error : Objek bukanlah segitiga";
    }

    public function hitungLuasLingkaran($sisi)
    {
        return $sisi * $sisi * pi();
    }
}

$objek1 = new Persegi();
$objek2 = new Segitiga();
$objek3 = new Lingkaran();

echo "<b>Jika luas sisi = 5</b><hr>";
echo "Luas Persegi = {$objek1->hitungLuasPersegi(5)}";
echo '<br>';
echo "Luas Segitiga = {$objek2->hitungLuasSegitiga(5)}";
echo '<br>';
echo "Luas Lingkaran = {$objek3->hitungLuasLingkaran(5)}";

/*
Output :
Jika luas sisi = 5
Luas Persegi = 25
Luas Segitiga = 12.5
Luas Lingkaran = 78.539816339745

Penjelasan :
Karena pada kelas Persei, Segitiga, dan Lingkaran melakukan implements terhadap interface 'hitungLuas',
maka ditiap-tiap kelas tersebut wajib menggunakan method yang ada didalam kelas interface 'hitungLuas'.
*/
