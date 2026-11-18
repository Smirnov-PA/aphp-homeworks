<?php

declare(strict_types=1);

require __DIR__ . '/autoload.php';

use Object\Human\Student;
use Object\Technics\Transport\Car;
use Object\Technics\Electronics\TV;   // ← новый namespace

$student = new Student();
$student->setName('pavel');
$student->setSurname('smirnov');
$student->setGroup('FSMID-97');
echo $student->name . ' ' . $student->surname . ' (' . $student->getGroup() . ')' . PHP_EOL;

$car = new Car();
$car->setBrand('chevrolet');
$car->setModel('Captiva');
$car->setColour('blue');
echo $car->brand . ' ' . $car->model . ', ' . $car->getColour() . PHP_EOL;

$tv = new TV();
$tv->setBrand('samsung');
$tv->setColour('silver');
$tv->setDiagonal(51);
echo $tv->brand . ', ' . $tv->colour . ', ' . $tv->getDiagonal() . '"' . PHP_EOL;

?>