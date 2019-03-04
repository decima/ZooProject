<?php

namespace App\Animals;

use App\Animal;

class Whale extends Animal 
{
    const whaleNoise = "splash";

    public function getNoise() : String {
        return self::whaleNoise;
    }
}