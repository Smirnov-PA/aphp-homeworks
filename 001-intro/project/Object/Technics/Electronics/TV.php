<?php

declare(strict_types=1);

namespace Object\Technics\Electronics;

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

?>