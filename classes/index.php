<?php 

require_once 'autoload.php';

use Object\Student;
use Transport\Car;
use Technics\Television;

// Создаем объект студента
$student = new Student();
$student->name = "Владимир";
$student->age = 42;


// Создаем объект машины
$car = new Car();
$car->brand = "Toyota";
$car->model = "Camry";


// Создаем объект телевизора
$tv = new Television();
$tv->brand = "Samsung";
$tv->size = 55;



// Используем объекты
echo $student->displayInfo() . "<br>";
echo $car->displayInfo() . "<br>";
echo $tv->displayInfo() . "<br>";

?>
