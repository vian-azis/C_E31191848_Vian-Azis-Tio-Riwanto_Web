<?php

class Tablet {
    private $merk, $camera, $memory;

    public function setMerk( $merk ) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setCamera( $camera ) {
        $this->camera = $camera;
    }

    public function getCamera() {
        return $this->camera;
    }

    public function setMemory( $camera ) {
        $this->camera = $camera;
    }

    public function getMemory() {
        return $this->camera;
    }

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
        $this->setMerk($merk);
        $this->setCamera($camera);
        $this->setMemory($memory);
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
Karena property pada kelas parent memiliki Visibility private, maka untuk mengakses propery parent (Tablet) pada
kelas child (Handphone) maupun diluar kelas Tablet tidak akan dapat dilakukan dan hanya dapat dilakukan jika menggunakan
metode setter dan getter. 

Karena Property dengan Visibility private hanya dapat diakses dari dalam class tersebut.
*/