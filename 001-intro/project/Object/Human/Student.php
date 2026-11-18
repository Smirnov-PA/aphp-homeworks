<?php

declare(strict_types=1);

namespace Object\Human;

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

?>