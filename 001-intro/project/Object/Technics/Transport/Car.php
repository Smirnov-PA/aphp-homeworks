<?php

declare(strict_types=1);

namespace Object\Technics\Transport;

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

?>