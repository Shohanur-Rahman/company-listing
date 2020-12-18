<?php
namespace App\Classes;
class Vehicle{
    public $a;
    public $b;
    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function fuelCost()
    {
        return $this->a*$this->b;
    }
}