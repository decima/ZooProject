<?php

namespace App\Animals;

use App\Animal;

class Parrot extends Animal 
{
    const parrotNoise = "coco";

    protected function getNoise(): String {
        return self::parrotNoise;
    }
}