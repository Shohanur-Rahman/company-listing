<?php
require 'vendor/autoload.php';

use App\Classes\Vehicle;

$obj = new Vehicle(5,50);
echo $obj->fuelCost();