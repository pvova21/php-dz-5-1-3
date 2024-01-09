<?php

namespace Technics;
class Television {
    public string $brand;
    public string $size;

// Метод
    public function displayInfo() {
        echo "Телевизор: {$this->brand}, Размер: {$this->size} дюймов";
    }
    public function changeChannel($channel) {
        echo "{$this->brand} переключил канал на {$channel}.";
    }
}

?>