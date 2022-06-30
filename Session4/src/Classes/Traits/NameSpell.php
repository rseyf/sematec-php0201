<?php
namespace App\Classes\Traits;

trait NameSpell {
    public function spellMyName($fullname) {
        var_dump(explode(" ", $fullname));
    }
}