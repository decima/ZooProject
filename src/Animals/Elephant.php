<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk
{
    const elephantNoise = "tooooout";

    protected function getNoise() : String {
        return self::elephantNoise;
    }
}