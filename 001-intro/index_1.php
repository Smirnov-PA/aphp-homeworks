<?php

declare(strict_types=1);

class Student
{
    public string $name;
    public string $surname;
    public string $group;

    public function setName(string $name): void
    {
        $this->name = ucfirst($name);
    }

    public function setSurname(string $surname): void
    {
        $this->surname = ucfirst($surname);
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function getGroup(): string
    {
        return $this->group;
    }
}

class Car
{
    public string $brand;
    public string $model;
    public string $colour;

    public function setBrand(string $brand): void
    {
        $this->brand = ucfirst($brand);
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    public function getColour(): string
    {
        return $this->colour;
    }
}

class TV
{
    public string $brand;
    public string $colour;
    public int $diagonal;

    public function setBrand(string $brand): void
    {
        $this->brand = ucfirst($brand);
    }

    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    public function setDiagonal(int $diagonal): void
    {
        $this->diagonal = $diagonal;
    }

    public function getDiagonal(): int
    {
        return $this->diagonal;
    }
}

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