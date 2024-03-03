<?php

namespace Class;

use Enum\Diet;

class Food
{
    public function __construct(
        private readonly Diet $diet,
        private readonly string $name = 'food'
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getDiet(): Diet
    {
        return $this->diet;
    }
}