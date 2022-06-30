<?php
namespace App\Classes;

use App\Classes\BaseClasses\Singer;

// Child Class
class PopSinger extends Singer {

    private $age = 0;
    public function __construct($name,$age)
    {
        // be ers bordane khosoosiate constructor pedar (parent) hast:
        parent::__construct($name);
        
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function whoAmI() {
        echo "I know who am I!! my name is: " . $this->getName() . "<br>";
        echo "I am" . $this->getAge() . "years old";
    }

    // inja ---> public function setName??? 
}