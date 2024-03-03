<?php

namespace Animals;

use Enum\Diet;
use Enum\Spice;
use Interface\TakeCareInterface;
use Trait\FurryCare;

class Fox extends Animal implements TakeCareInterface
{
    use FurryCare;

    public function __construct(string $name)
    {
        parent::__construct($name, Spice::Fox, Diet::Omnivore);
    }

    public function takeCare(): void
    {
        $this->groom($this);
    }
}