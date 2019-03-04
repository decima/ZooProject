<?php

namespace App\Animals;

use App\Animal;

class Fish extends Animal 
{
    const fishNoise = "bloubloublou";

    protected function getNoise() : String {
        return self::fishNoise;
    }
}