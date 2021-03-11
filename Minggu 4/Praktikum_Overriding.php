<?php
// The parent class has hello method that returns "beep".
class Car
{
    public function hello()
    {
        return "beep";
    }
}

//The child class has hello method that returns "Halllo"
class SportsCar extends Car
{
    public function hello()
    {
        return "Hallo";
    }
}

//Create a new object
$sportsCarl = new SportsCar();

//Get the result of the hello method
echo $sportsCarl->hello();

/*
Output : Hallo
Penjelasan :
Pada child class (kelas SportsCar) melakukan  overriding method hello() sehingga yang digunakan oleh objek
daro kelas SportsCar adalah method hello() milik kelas SportsCar.
*/