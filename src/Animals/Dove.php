<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;

class Dove extends Animal implements CanFly
{
    const doveNoise = "Rou rouuu";

    protected function getNoise() : String {
        return self::doveNoise;
    }
}