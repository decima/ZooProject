<?php

namespace App\Animals;

use App\Animal;

class Zebra extends Animal 
{
    const zebraNoise = "hiiii";
    
    protected function getNoise() : String {
        return self::zebraNoise;
    }
}