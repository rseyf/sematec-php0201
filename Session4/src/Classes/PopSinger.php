<?php
namespace App\Classes;

use App\Classes\BaseClasses\Singer;

// Abstract class + Child Class
class PopSinger extends Singer {

    private string $name;
    private int $age;
    public function __construct($name,$age)
    {
        $this->setName($name);   
        $this->setAge($age);
    }

    public function getName():string {
        return $this->name;
    }

    public function setAge($ageParam) {
        $this->age = $ageParam;
    }

    public function getAge() {
        return $this->age;
    }

    protected function setName($nameParam)
    {
        $this->name = $nameParam;
    }

    // override bakhshi az polymorphism hast
    public function spellMyName() {
        echo "spell namanadi!?";
    }
}