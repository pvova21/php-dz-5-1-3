<?php

namespace Transport;
class Car {
    public string $brand;
    public string $model;

// �����
    public function displayInfo() {
        echo "������: {$this->brand} {$this->model}";
    }
    public function startEngine() {
        echo "{$this->brand} {$this->model} �������� ���������.";
    }
}

?>