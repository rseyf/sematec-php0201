<?php
namespace App\Classes\BaseClasses;

// Parent Class
class Singer {
    // prropertise
    private string $name;

    // constructore
    public function __construct($name)
    {
        $this->name = $name;
    }

    // getter
    public function getName() {
        return $this->name;
    }

    // Encapsulation
    // setter
    protected function setName($name) {
        $this->name = $name;
    }

}