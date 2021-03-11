<?php
// The parent class
class Car
{
    // The model property is private, thus it can be accessed
    // only from inside the class
    protected $model;
    // Public setter method
    public function setModel($model)
    {
        $this->model = $model;
    }
}
// The child class
class SportsCar extends Car
{
    //Tries to get private property that belongs to the parent
    public function hello()
    {
        return "beep! I am a <i>" . $this->model . "</i><br />";
    }
    
}
// Create an instance from the child class
$sportsCarl = new SportsCar();
// Set the class model name
$sportsCarl->setModel('Mercedes Benz');
echo $sportsCarl->hello();

/*
Output : beep! I am a Mercedes Benz
Penjelasan :
Property dengan Visibility protected tetap dapat dikases oleh child class, namun tetap tidak dapat diakses
di luar kelas yang tidak termasuk child class.
*/