<?php

namespace Object;
class Student {
    public string $name;
    public string $age;

// �����
    public function displayInfo() {
        echo "�������: {$this->name}, �������: {$this->age} ���";
    }
    public function study() {
        echo "{$this->name} ���������� ������.";
    }
}

?>