<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Parrot extends Animal implements CanFly, CanWalk
{
    const parrotNoise = "coco";

    protected function getNoise(): String {
        return self::parrotNoise;
    }
}