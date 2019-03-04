<?php

namespace App\Animals;

use App\Animal;

class Elephant extends Animal 
{
    const elephantNoise = "tooooout";

    protected function getNoise() : String {
        return self::elephantNoise;
    }
}