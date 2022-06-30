<?php

class Singer {
    // prropertise
    private string $name;

    // constructore
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Encapsulation
    // setter
    public function setName($name) {
        $this->name = $name;
    }

    // getter
    public function getName() {
        return $this->name;
    }
}