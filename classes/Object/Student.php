<?php

namespace Object;
class Student {
    public string $name;
    public string $age;

// Метод
    public function displayInfo() {
        echo "Студент: {$this->name}, Возраст: {$this->age} лет";
    }
    public function study() {
        echo "{$this->name} занимается учебой.";
    }
}

?>