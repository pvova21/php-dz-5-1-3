<?php 

require_once 'autoload.php';

use Object\Student;
use Transport\Car;
use Technics\Television;

// ������� ������ ��������
$student = new Student();
$student->name = "��������";
$student->age = 42;


// ������� ������ ������
$car = new Car();
$car->brand = "Toyota";
$car->model = "Camry";


// ������� ������ ����������
$tv = new Television();
$tv->brand = "Samsung";
$tv->size = 55;



// ���������� �������
echo $student->displayInfo() . "<br>";
echo $car->displayInfo() . "<br>";
echo $tv->displayInfo() . "<br>";

?>
