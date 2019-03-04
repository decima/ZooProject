<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;

class Parrot extends Animal implements CanFly
{
    const parrotNoise = "coco";

    protected function getNoise(): String {
        return self::parrotNoise;
    }
}