<?php
namespace App\Classes\Helper;
class NameHelper {
    public static function spellMyName(string $fullname) {
        var_dump(explode(" ", $fullname));
    }
}