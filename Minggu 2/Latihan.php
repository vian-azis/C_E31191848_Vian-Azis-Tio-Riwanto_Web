<?php

class Laptop {
    public $pemilik, $merk;

    public function __construct($pemilik = "Pemilik", $merk = "Merk")
    {
        $this->pemilik = $pemilik;
        $this->merk = $merk;
    }

    public function hidupkan_laptop()
    {
        return "Hidupkan laptop {$this->merk} punya {$this->pemilik}";
    }

    public function matikan_laptop()
    {
        return "Matikan laptop {$this->merk} punya {$this->pemilik}";
    }

    public function restart_laptop()
    {
        return "Matikan laptop {$this->merk} punya {$this->pemilik}. Hidupkan laptop {$this->merk} punya {$this->pemilik}";
    }
}

$laptop1 = new Laptop("A", "ASUS");
echo $laptop1->hidupkan_laptop();

echo "<br><br>";

$laptop1 = new Laptop("B", "Acer");
echo $laptop1->matikan_laptop();

echo "<br><br>";

$laptop1 = new Laptop("C", "Lenovo");
echo $laptop1->restart_laptop();
