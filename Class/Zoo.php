<?php

namespace Class;

use Enum\Diet;

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
    }

    public function takeCareOfAnimals(): void
    {
        foreach ($this->animals as $animal) {
            $animal->takeCare();
        }
    }
}