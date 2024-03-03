<?php

namespace Animals;


use Enum\Diet;
use Enum\Spice;

class Rabbit extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name, Spice::Rabbit, Diet::Herbivore);
    }
}