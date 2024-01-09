<?php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($classFile)) {
        require_once $classFile;
    } else {
        echo "Ошибка: Класс не найден: $className";
    }
});

?>
