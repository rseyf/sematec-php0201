<?php
namespace App\Classes\BaseClasses;

// Parent Class
abstract class Singer {
    // constructor
    abstract public function __construct($name,$age);

    // getter
    abstract public function getName(): string;

    // Encapsulation
    // setter
    abstract protected function setName($name);

    public function spellMyName() {
        var_dump(explode(" ",$this->getName()));
    }

}