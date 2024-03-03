<?php

namespace Trait;

trait FurryCare
{
    public function groom(string $animalName): void
    {
        echo "Furry is being groomed for " . $animalName . ".\n";
    }
}