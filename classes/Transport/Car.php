<?php

namespace Transport;
class Car {
    public string $brand;
    public string $model;

// Метод
    public function displayInfo() {
        echo "Машина: {$this->brand} {$this->model}";
    }
    public function startEngine() {
        echo "{$this->brand} {$this->model} запустил двигатель.";
    }
}

?>