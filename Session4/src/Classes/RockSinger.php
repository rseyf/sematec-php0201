<?php
namespace App\Classes;

use App\Classes\Interfaces\SingerInterface;

// Interface Class
class RockSinger implements SingerInterface {
    private string $name;
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function sing() {
        echo "ya ya ya ....";
    }


    public function __construct($name)
    {
        $this->setName($name);
    }
}