<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class Whale extends Animal implements CanSwim
{
    const whaleNoise = "splash";

    public function getNoise() : String {
        return self::whaleNoise;
    }
}