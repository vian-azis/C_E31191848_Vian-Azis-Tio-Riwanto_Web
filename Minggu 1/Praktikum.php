<?php
// Declare class
class Car
{
    // properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    // method = hello
    public function hello()
    {
        return "beep";
    }
}

//Membuat instance
$bmw = new Car();
$mercedes = new Car();

// Get values
echo $bmw->color; // beige
echo "<br />";
echo $mercedes->color; // beige
echo "<hr />";
// Set values
$bmw->color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";

// Get values
echo $bmw->color; // blue
echo "<br />";
echo $mercedes->color; // beige
echo "<br />";
echo $bmw->comp; // BMW
echo "<br />";
echo $mercedes->comp; // Mercedes Benz
echo "<hr />";

// methods get a beep
echo $bmw->hello(); // beep
echo "<br />";
echo $mercedes->hello(); // beep

/*
Output :
beige
beige
blue
beige
BMW
Mercedes Benz
beep
beep

Penjelasan :
Listing program diatas merupakan contoh dari OOP dasar membuat Kelas, Method, Properti, dan Objek dari kelas.
*/