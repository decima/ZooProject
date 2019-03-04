<?php

require __DIR__ . "/vendor/autoload.php";

use App\Animals\Fish;
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Elephant;
use App\Animals\Zebra;
use App\Animals\Parrot;
use App\Animals\Dove;
use App\Zoo;

$animals = [
    new Fish("f1"),
    new Fish("f2"),
    new Fish("f3"),
    new Fish("f4"),
    new Fish("f5"),
    new BubbleFish("bf1"),
    new BubbleFish("bf2"),
    new BubbleFish("bf3"),
    new CatFish("cf1"),
    new CatFish("cf2"),
    new ClownFish("clf"),
    new Elephant("e1"),
    new Elephant("e2"),
    new Zebra("z"),
    new Parrot("p1"),
    new Parrot("p2"),
    new Parrot("p3"),
    new Parrot("p4"),
    new Parrot("p5"),
    new Parrot("p6"),
    new Parrot("p7"),
    new Parrot("p8"),
    new Parrot("p9"),
    new Parrot("p10"),
    new Dove("d1"),
    new Dove("d2")
];

foreach ($animals as $animal) {
    Zoo::addAnimal($animal);
}

Zoo::visitZoo();