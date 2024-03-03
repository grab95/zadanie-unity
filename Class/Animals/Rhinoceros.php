<?php

namespace Animals;

use Class\Animal;
use Enum\Diet;
use Enum\Spice;

class Rhinoceros extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name, Spice::Rhinoceros, Diet::Herbivore);
    }
}