<?php 

class Kalkulator {
    private $var_a = 0, $var_b = 0, $var_c = 0;

    public function setBilangan1( $var_a ) {
        $this->var_a = $var_a;
    }

    public function getBilangan1() {
        return $this->var_a;
    }

    public function setBilangan2( $var_b ) {
        $this->var_b = $var_b;
    }

    public function getBilangan2() {
        return $this->var_b;
    }

    public function setBilangan3( $var_c ) {
        $this->var_c = $var_c;
    }

    public function getBilangan3() {
        return $this->var_c;
    }

    public function tambah() {
        $hasil = $this->var_a + $this->var_b + $this->var_c;
        return "{$this->var_a} + {$this->var_b} + {$this->var_c} = <b>".$hasil."</b>";
    }

    public function kurang() {
        $hasil = $this->var_a - $this->var_b - $this->var_c;
        return "{$this->var_a} - {$this->var_b} - {$this->var_c} = <b>".$hasil."</b>";
    }

    public function bagi() {
        $hasil = $this->var_a / $this->var_b / $this->var_c;
        return "{$this->var_a} : {$this->var_b} : {$this->var_c} = <b>".$hasil."</b>";
    }

    public function kali() {
        $hasil = $this->var_a * $this->var_b * $this->var_c;
        return "{$this->var_a} &times; {$this->var_b} &times; {$this->var_c} = <b>".$hasil."</b>";
    }

}

$bilangan = new Kalkulator();

$bilangan->setBilangan1(50);
$bilangan->setBilangan2(20);
$bilangan->setBilangan3(5);

echo "PERHITUNGAN BILANGAN : <b>{$bilangan->getBilangan1()}</b>, <b>{$bilangan->getBilangan2()}</b>, <b>{$bilangan->getBilangan3()}</b> <br><br>";

echo '<b>Penjumlahan :</b><br>';
echo $bilangan->tambah();
echo '<br><br>';

echo '<b>Pengurangan :</b><br>';
echo $bilangan->kurang();
echo '<br><br>';

echo '<b>Pembagian :</b><br>';
echo $bilangan->bagi();
echo '<br><br>';

echo '<b>Perkalian :</b><br>';
echo $bilangan->kali();