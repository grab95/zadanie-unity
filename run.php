<?php
require __DIR__ . '/vendor/autoload.php';

use Animals\Elephant;
use Animals\Fox;
use Animals\Rabbit;
use Animals\Rhinoceros;
use Animals\SnowLeopard;
use Animals\Tiger;
use Class\Zoo;

$animals = [
    new Elephant("Romek"),
    new Fox("Tomek"),
    new Rabbit("Artur"),
    new Rhinoceros("Janek"),
    new SnowLeopard("Kazik"),
    new Tiger("Józio"),
];

$zoo = new Zoo();
$zoo->addAnimals($animals);

$zoo->feedAnimals();
echo "\n";
$zoo->takeCareOfAnimals();