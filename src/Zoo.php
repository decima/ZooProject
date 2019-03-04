<?php

namespace App;

use App\Enclosure;
use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;
use App\Interfaces\CanSwim;

class Zoo 
{
    /**
     * @var Enclosure
     */
    private static $aquarium = null;
        /**
     * @var Enclosure
     */
    private static $aviary = null;
        /**
     * @var Enclosure
     */
    private static $fence = null;

    public static function getAquarium () : Enclosure {
        if(self::$aquarium === null) {
            self::$aquarium = new Enclosure();
        }
        return self::$aquarium;
    }

    public static function getAviary () : Enclosure {
        if(self::$aviary === null) {
            self::$aviary = new Enclosure();
        }
        return self::$aviary;
    }

    public static function getFence () : Enclosure {
        if(self::$fence === null) {
            self::$fence = new Enclosure();
        }
        return self::$fence;
    }

    public static function addAnimal (Animal $animal) {
        if($animal instanceof CanFly) {
            self::getAviary()->addAnimal($animal);
        }
        else if($animal instanceof CanWalk) {
            self::getFence()->addAnimal($animal);
        }
        else if($animal instanceof CanSwim) {
            self::getAquarium()->addAnimal($animal);
        }
        else {
            echo "We are not able to store this animal ( " . $animal->getName() . ")" . PHP_EOL;
        }
    }

    public static function visitZoo() {
        echo "Available animal in Aviary : " . PHP_EOL;
        self::getAviary()->__toString();
        echo "Available animal in Fence : " . PHP_EOL;
        self::getFence()->__toString();
        echo "Available animal in Aquarium : " . PHP_EOL;
        self::getAquarium()->__toString();
    }
}