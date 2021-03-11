<?php
class Car {
    //private
    private $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }

    //perbaikan 'menambahkan fungsi setter untuk mengakses Property dengan Visibility Private'
    public function setModel($model){
        $this->model = $model;
    }
}

$mercedes = new Car();

////akses property dari luar class.

// $mercedes->model = "Mercedes benz"; //jika mengakses dari luar kelas akan terjadi error

//perbaikan
$mercedes->setModel("Mercedes benz");

echo $mercedes->getModel();

/*
Output : Fatal error: Uncaught Error: Cannot access private property Car::$model in C:\xampp\htdocs\Semester-4\Minggu 3\Praktikum.php:14 Stack trace: #0 {main} thrown in C:\xampp\htdocs\Semester-4\Minggu 3\Praktikum.php on line 14

Penjelasan :
Kode diatas mengalami error karena program mencoba memodifikasi properti dengan Property Visibility Private dari luar class, 
Sehingga terjadi error. Untuk mengatasinya dengan cara membuat function setter seperti yang telah saya lakukan.
*/