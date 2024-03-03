<?php

namespace Class;

use Animals\Animal;
use Enum\Diet;
use Interface\TakeCareInterface;

class Zoo
{
    /**
     * @var Animal[]
     */
    private array $animals;

    public function addAnimal(Animal $newAnimal): void
    {
        $this->animals[] = $newAnimal;
    }

    /**\
     * @param Animal[] $newAnimal
     * @return void
     */
    public function addAnimals(array $newAnimals): void
    {
        $this->animals = $newAnimals;
    }

    public function feedAnimals(): void
    {
        $meet = new Food(Diet::Carnivore, 'meet');
        $rice = new Food(Diet::Herbivore, 'rice');
        $meetWithRice = new Food(Diet::Omnivore, 'meet with rice');
        foreach ($this->animals as $animal) {
            match ($animal->getDiet()){
                Diet::Herbivore => $animal->feed($rice),
                Diet::Carnivore => $animal->feed($meet),
                Diet::Omnivore => $animal->feed($meetWithRice),
            };
        }

        echo "\nTest with different food \n\n";

        foreach ($this->animals as $animal) {
            match ($animal->getDiet()){
                Diet::Herbivore => $animal->feed($meetWithRice),
                Diet::Carnivore => $animal->feed($rice),
                Diet::Omnivore => $animal->feed($meet),
            };
        }
    }

    public function takeCareOfAnimals(): void
    {
        foreach ($this->animals as $animal) {
            if ($animal instanceof TakeCareInterface)
            $animal->takeCare();
        }
    }
}