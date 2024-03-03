<?php

namespace Trait;

trait FurryCare
{
    public function groom(string $animalName): void
    {
        echo $animalName . " is groomed.\n";
    }
}