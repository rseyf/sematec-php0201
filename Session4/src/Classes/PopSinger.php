<?php

class PopSinger extends Singer {

    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function whoAmI() {
        echo $this->getName();
    }
}