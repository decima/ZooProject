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

    public static function getAquarium () : ?Enclosure {
        return self::$aquarium;
    }

    public static function getAviary () : ?Enclosure {
        return self::$aviary;
    }

    public static function getFence () : ?Enclosure {
        return self::$fence;
    }

    public static function addAnimal (Animal $animal) {
        if($animal instanceof CanFly) {
            if(self::$aviary === null) {
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimal($animal);
        }
        else if($animal instanceof CanWalk) {
            if(self::$fence === null) {
                self::$fence = new Enclosure();
            }
            self::$fence->addAnimal($animal);
        }
        else if($animal instanceof CanSwim) {
            if(self::$aquarium === null) {
                self::$aquarium = new Enclosure();
            }
            self::$aquarium->addAnimal($animal);
        }
        else {
            throw new \Exception("We are not able to store this animal ( " . $animal->getName() . ")");
        }
    }

    public static function visitZoo() {
        if(self::getAviary()){
            echo "Available animal in Aviary : " . PHP_EOL;
            echo self::getAviary().PHP_EOL;
        }
        
        if(self::getFence()){
            echo "Available animal in Fence : " . PHP_EOL;
            echo self::getFence().PHP_EOL;
        }

        if(self::getAquarium()){
            echo "Available animal in Aquarium : " . PHP_EOL;
            echo self::getAquarium().PHP_EOL;
        }

    }
}