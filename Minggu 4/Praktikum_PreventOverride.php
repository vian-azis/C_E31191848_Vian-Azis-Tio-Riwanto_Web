<?php
// The parent class has hello method that returns "beep".
class Car
{
    final public function hello()
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
Output : Fatal error: Cannot override final method Car::hello() in C:\xampp\htdocs\Semester-4\Minggu 4\Praktikum_PreventOverride.php on line 14
Penjelasan :
Pada child class (kelas SportsCar) melakukan  overriding method hello() sehingga yang digunakan oleh objek
daro kelas SportsCar adalah method hello() milik kelas SportsCar, namun hal tersebut tidak dapat dilakukan
karena pada parent class (kelas Car) method hello() memiliki keyword final
*/