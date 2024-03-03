<?php

namespace Animals;

use Class\Animal;
use Enum\Diet;
use Enum\Spice;
use Trait\FurryCare;

class Fox extends Animal
{
    use FurryCare;

    public function __construct(string $name)
    {
        parent::__construct($name, Spice::Fox, Diet::Omnivore);
    }

    public function takeCare(): void
    {
        $this->groom($this->name);
    }
}