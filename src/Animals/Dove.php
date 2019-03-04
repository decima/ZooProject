<?php

namespace App\Animals;

use App\Animal;

class Dove extends Animal 
{
    const doveNoise = "Rou rouuu";

    protected function getNoise() : String {
        return self::doveNoise;
    }
}