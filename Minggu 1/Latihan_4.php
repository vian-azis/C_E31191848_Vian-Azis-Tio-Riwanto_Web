<?php 

class Buku {
    private $judul, 
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoBuku() {
        $str = "Judul : {$this->judul} <br> Penulis : {$this->penulis} <br> Penerbit : {$this->penerbit} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Jumlah Halaman : {$this->halaman}";
        return $str;
    }

}

$buku1 = new Buku("7 in 1 Pemrograman Web untuk Pemula", "Rohi Abdulloh", "Elex Media Komputindo", 80000, 336);
$buku1->setDiskon(11);
echo $buku1->getInfoBuku($buku1);