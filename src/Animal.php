<?php

namespace App;

abstract class Animal {

    private $name;

    public function __construct(String $name) {
        $this->name = $name;
    }

    public function getName() : String 
    {
        return $this->name;
    }

    abstract protected function getNoise () : String;

    public function noise () {
        return $this->getNoise();
    }
}