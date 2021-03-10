<?php
class Car {

    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    //method = hello
    public function hello()
    {
        return "Beep I am a <i>" . $this->comp . "</i>, and I am <i>" . $this->color;
    }
}

//create object di class.
$bmw = new Car();
$mercedes = new Car();

//set values dari class properties.
$bmw->color = 'blue';
$bmw->comp = 'BMW';
$mercedes->comp = 'Mercedes Benz';

//call hello method untuk $bmw object.
echo $bmw->hello();

/*
Output : Beep I am a BMW, and I am blue

Penjelasan : 
Variabel $this adalah sebuah variabel khusus dalam OOP PHP yang digunakan sebagai penunjuk 
kepada objek, ketika kita mengaksesnya dari dalam class.

Dimana Operator objek '->' digunakan dalam cakupan objek untuk mengakses method dan properti objek. 
Artinya adalah apa yang ada di sebelah kanan operator adalah anggota dari objek 
yang dipakai ke dalam variabel di sisi kiri operator.
*/