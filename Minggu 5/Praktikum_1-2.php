<?php

include("Praktikum_1-1.php");

class miniCar implements Car {
    private $model;

    public function setModel($name)
    {
        $this -> model = $name;
    }

    public function getModel()
    {
        return $this -> model;
    }
}

$object1 = new miniCar();
$object1 -> setModel("multi-purpose vehicle");

$object2 = new miniCar();
$object2 -> setModel("sedan");

$object3 = new miniCar();
$object3 -> setModel("hatchback");

echo $object1->getModel();
echo '<br>';
echo $object2->getModel();
echo '<br>';
echo $object3->getModel();