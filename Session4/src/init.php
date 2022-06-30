<?php
require_once __DIR__ ."/autoloader.php";

use App\Classes\BaseClasses\Singer;
use App\Classes\PopSinger;

$mohsenYeganeh = new PopSinger("Mohsen Yeganeh",37);
// echo $mohsenYeganeh->getName(); 
// echo $mohsenYeganeh->getAge();
echo $mohsenYeganeh->spellMyName();

// az singer nabayad instance sakht
// chon Singer yek class entezaei hast:
// entezaei (abstract): yek mafhoome kolli!
// nabayad bezarim az Singer kasi object ya nemune besaze
// $chertSinger = new Singer("chert pert");



