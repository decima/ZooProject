<?php

namespace App;

use App\Animal;

class Enclosure
{
    private $animals = [];

    public function addAnimal (Animal $animal) {
        $this->animals[] = $animal;
    }

    public function __toString() {
        foreach ($this->animals as $animal) {
            echo "Animal : " . $animal->getName() . " | Noise : " . $animal->noise() . PHP_EOL; 
        }
    }
}