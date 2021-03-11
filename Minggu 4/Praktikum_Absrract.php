<?php
abstract class Car
{
    // Abstract classes can have properties
    protected $tankvolume;
    // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
        $this->tankvolume = $volume;
    }
    // Abstract method
    abstract public function calcNumMilesOnFullTank();
}
