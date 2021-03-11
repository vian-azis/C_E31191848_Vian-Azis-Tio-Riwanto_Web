<?php
class Car {
    //private
    public $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }
}

$mercedes = new Car();

////akses property dari luar class.
$mercedes->model = "Mercedes benz";

echo $mercedes->getModel();

/*
Output : The car model is Mercedes benz

Penjelasan : 
Program berjalan normal walau melakukan akses property dari luar class, karena properti yang diakses
memiliki Property Visibility Public.
*/