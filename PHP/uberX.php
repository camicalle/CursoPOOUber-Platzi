<?php
require_once("car.php");
class UberX extends Car
{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar()
    {
        echo "Licence: $this->license 
            Driver: {$this->driver->name} 
            Passenger: $this->passenger
            Brand: $this->brand
            Model: $this->model";
    }
}