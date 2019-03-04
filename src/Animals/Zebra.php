<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk
{
    const zebraNoise = "hiiii";
    
    protected function getNoise() : String {
        return self::zebraNoise;
    }
}