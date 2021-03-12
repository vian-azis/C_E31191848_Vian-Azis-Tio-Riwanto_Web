<?php 

include("Praktikum_2-1.php");
include("Praktikum_2-2.php");

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    // calcArea calculates the area of rectangles
    public function calcArea()
    {
        return $this -> width * $this -> height;
    }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo '<br>';
echo $rect -> calcArea();