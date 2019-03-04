<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class Fish extends Animal implements CanSwim
{
    const fishNoise = "bloubloublou";

    protected function getNoise() : String {
        return self::fishNoise;
    }
}