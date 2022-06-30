<?php
namespace App\Classes\Interfaces;

interface SingerInterface {
    public function getName();
    public function setName($name);
    public function sing();
}