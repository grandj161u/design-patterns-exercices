<?php

namespace App;

use App\Computer;


class Gpu implements Computer
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 600;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ', with a GPU';
    }
}
