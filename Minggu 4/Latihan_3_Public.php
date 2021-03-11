<?php

class Tablet {
    public $merk, $camera, $memory;

    public function getInfoProduk()
    {
        $str = "Merk : {$this->merk} <br> Camera : {$this->camera} Gb <br> Memory : {$this->memory} Mp";

        return $str;
    }

}

class Handphone extends Tablet {
    public $nama;

    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfoProduk()
    {
        $str = "Nama : {$this->nama} <br>" . parent::getInfoProduk();
        return $str;
    }
}

$hp = new Handphone("S10", "Samsung", 16, 8);
echo $hp->getInfoProduk();

/*
Output : 
Nama : S10
Merk : Samsung
Camera : 16 Gb
Memory : 8 Mp

Penjelasan :
Karena property pada kelas parent memiliki Visibility public, maka untuk mengakses propery parent (Tablet) pada
kelas child (Handphone) dapat dilakukan secara langsung dari dalam maupun luar kelas child (Handphone).

Karena Property dengan Visibility public dapat diakses dari mana saja.
*/