<?php

namespace Animals;

use Class\Animal;
use Enum\Diet;
use Enum\Spice;
use Trait\FurryCare;

class Tiger extends Animal
{
    use FurryCare;

    public function __construct(string $name)
    {
        parent::__construct($name, Spice::Tiger, Diet::Carnivore);
    }

    public function takeCare(): void
    {
        $this->groom($this);
    }
}