<?php

namespace Technics;
class Television {
    public string $brand;
    public string $size;

// �����
    public function displayInfo() {
        echo "���������: {$this->brand}, ������: {$this->size} ������";
    }
    public function changeChannel($channel) {
        echo "{$this->brand} ���������� ����� �� {$channel}.";
    }
}

?>