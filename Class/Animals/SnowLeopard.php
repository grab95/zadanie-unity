<?php

namespace Animals;

use Class\Animal;
use Enum\Diet;
use Enum\Spice;
use Interface\TakeCareInterface;
use Trait\FurryCare;

class SnowLeopard extends Animal implements TakeCareInterface
{
    use FurryCare;

    public function __construct(string $name)
    {
        parent::__construct($name, Spice::SnowLeopard, Diet::Carnivore);
    }
    public function takeCare(): void
    {
        $this->groom($this);
    }
}