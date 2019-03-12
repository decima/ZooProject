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
        $strEnclosure="";
        foreach ($this->animals as $animal) {
            $strEnclosure .= "Animal : " . $animal->getName() . " | Noise : " . $animal->noise() . PHP_EOL; 
        }
        return $strEnclosure;
    }
}