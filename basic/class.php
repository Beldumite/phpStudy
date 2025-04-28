<?php   

class Car {
    public $model;
    public $brand;
    public function __construct($model, $brand) {
        //__construct is basically construction but in php
        $this->model = $model;
        $this->brand = $brand;
    }
    function move() {
        echo "$this->model $this->brand is moving right now";
    }
}

$toyota = new Car("Avanza", "Toyota");
$toyota->move();
