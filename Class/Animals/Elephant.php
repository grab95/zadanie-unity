<?php

namespace Animals;

use Enum\Diet;
use Enum\Spice;

class Elephant extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name, Spice::Elephant, Diet::Herbivore);
    }
}