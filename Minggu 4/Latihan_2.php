<?php

abstract class ItemProduk
{

    private $nama, $ukuran, $warna;

    public function __construct($nama = "Nama", $ukuran = 0, $warna = "Warna")
    {
        $this->nama = $nama;
        $this->ukuran = $ukuran;
        $this->warna = $warna;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }

    public function getUkuran()
    {
        return $this->ukuran;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    abstract public function Ukuran();

    abstract public function Warna();

    abstract public function Nama();

    abstract public function getInfoProduk();
}

class Topi extends ItemProduk {
    public $model;

    public function __construct( $nama = "Nama", $ukuran = 0, $warna = "Warna", $model = "Model" ) {
        parent::__construct( $nama, $ukuran, $warna );

        $this->model = $model;
    }

    public function Ukuran() {
        return "Ukuran Topi : {$this->getUkuran()} cm lingkar kepala";
    }

    public function Warna() {
        return "Warna Topi : {$this->getWarna()}";
    }

    public function Nama() {
        return "Nama Topi : {$this->getNama()}";
    }

    public function Model() {
        return "Model Topi : {$this->model}";
    }

    public function getInfoProduk() {
        $str = "Kategori : Topi <br> {$this->Nama()} <br> {$this->Ukuran()} <br> {$this->Warna()} <br> {$this->Model()}";
        return $str;
    }
}

class Celana extends ItemProduk {
    public $model, $tipe;

    public function __construct( $nama = "Nama", $ukuran = 0, $warna = "Warna", $model = "Model", $tipe = "Tipe" ) {
        parent::__construct( $nama, $ukuran, $warna );

        $this->model = $model;
        $this->tipe = $tipe;
    }

    public function Ukuran() {
        $size = "Custom";
        if ($this->getUkuran() > 25 && $this->getUkuran() <= 27){
            $size = "S";
        } elseif ($this->getUkuran() > 27 && $this->getUkuran() <= 30) {
            $size = "M";
        } elseif ($this->getUkuran() === 31) {
            $size = "L";
        } elseif ($this->getUkuran() > 31 && $this->getUkuran() <= 33) {
            $size = "XL";
        }

        return "Ukuran Celana : ".$size;
    }

    public function Warna() {
        return "Warna Celana : {$this->getWarna()}";
    }

    public function Nama() {
        return "Nama Celana : {$this->getNama()}";
    }

    public function Model() {
        return "Model Celana : {$this->model}";
    }

    public function Tipe() {
        return "Tipe Celana : {$this->tipe}";
    }

    public function getInfoProduk() {
        $str = "Kategori : Celana <br> {$this->Nama()} <br> {$this->Ukuran()} <br> {$this->Warna()} <br> {$this->Model()} <br> {$this->Tipe()}";
        return $str;
    }
}

class Baju extends ItemProduk {
    public $tipe;

    public function __construct( $nama = "Nama", $ukuran = 0, $warna = "Warna", $tipe = "Tipe" ) {
        parent::__construct( $nama, $ukuran, $warna );

        $this->tipe = $tipe;
    }

    public function Ukuran() {
        $size = "Custom";
        if ($this->getUkuran() > 46 && $this->getUkuran() <= 48){
            $size = "S";
        } elseif ($this->getUkuran() > 48 && $this->getUkuran() <= 50) {
            $size = "M";
        } elseif ($this->getUkuran() > 50 && $this->getUkuran() <= 52) {
            $size = "L";
        } elseif ($this->getUkuran() > 52 && $this->getUkuran() <= 54) {
            $size = "XL";
        }

        return "Ukuran Baju : ".$size;
    }

    public function Warna() {
        return "Warna Baju : {$this->getWarna()}";
    }

    public function Nama() {
        return "Nama Baju : {$this->getNama()}";
    }

    public function Tipe() {
        return "Tipe Baju : {$this->tipe}";
    }

    public function getInfoProduk() {
        $str = "Kategori : Baju <br> {$this->Nama()} <br> {$this->Ukuran()} <br> {$this->Warna()} <br> {$this->Tipe()}";
        return $str;
    }
}

$topi = new Topi("Snapback", 54, "Merah Putih", "Marvel");
echo $topi->getInfoProduk();

echo "<br><br>";

$celana = new Celana("Lea", 27, "Hitam", "Panjang", "Jeans");
echo $celana->getInfoProduk();

echo "<br><br>";

$baju = new Baju("Nike Classic", 49, "Putih", "Kaos");
echo $baju->getInfoProduk();
