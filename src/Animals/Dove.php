<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Dove extends Animal implements CanFly, CanWalk
{
    const doveNoise = "Rou rouuu";

    protected function getNoise() : String {
        return self::doveNoise;
    }
}