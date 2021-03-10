<?php
class Car {

    public $tank;
    // Add gallons of fuel to the tank when we fill it.
    public function fill($float)
    {
        $this->tank += $float;
        return $this;
    }
    // Substract gallons of fuel from the tank as we ride the car.
    public function ride($float)
    {
        $miles = $float;
        $gallons = $miles / 50;
        $this->tank -= ($gallons);
        return $this;
    }
}

// Create a new object from the Car class.
$bmw = new Car();

// Add 10 gallons of fuel, then ride 40 miles,
// and get the number of gallons in the tank.
$tank = $bmw->fill(10)->ride(40)->tank;

// Printout.
echo "The number of gallons left in the tank: " . $tank . "gal.";

/*
Output : The number of gallons left in the tank: 9.2gal.

Penjelasan : 
Variabel $this adalah sebuah variabel khusus dalam OOP PHP yang digunakan sebagai penunjuk 
kepada objek, ketika kita mengaksesnya dari dalam class.

Dimana Operator objek '->' digunakan dalam cakupan objek untuk mengakses method dan properti objek. 
Artinya adalah apa yang ada di sebelah kanan operator adalah anggota dari objek 
yang dipakai ke dalam variabel di sisi kiri operator.
*/
