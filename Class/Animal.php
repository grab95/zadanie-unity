<?php

namespace Class;

use Enum\Diet;
use Enum\Spice;

abstract class Animal
{
    public function __construct(
        protected readonly string $name,
        protected readonly Spice $spice,
        protected readonly Diet $diet
    ) {}

    public function getDiet(): Diet
    {
        return $this->diet;
    }

    public function __toString(): string
    {
        return $this->spice->value . '-' . $this->name;
    }

    public function feed(Food $food): void
    {
        echo $this . ($this->diet === $food->getDiet() ? ' eats ' : 'cannot eat') . $food->getName() . ".\n";
    }
    public function takeCare(): void
    {}
}