<?php
require_once __DIR__ ."/autoloader.php";

use App\Classes\BaseClasses\Singer;
use App\Classes\PopSinger;
use App\Classes\RockSinger;
use App\Exceptions\ContentMismatchException;

$mohsenYeganeh = new PopSinger("Mohsen Yeganeh",37);
// $mohsenYeganeh->spellMyName($mohsenYeganeh->getName());
// echo $mohsenYeganeh->getName(); 
// echo $mohsenYeganeh->getAge();
// echo $mohsenYeganeh->spellMyName();

$nineInchNails = new RockSinger("Nine Inch Nails");
// $nineInchNails->spell();

// az singer nabayad instance sakht
// chon Singer yek class entezaei hast:
// entezaei (abstract): yek mafhoome kolli!
// nabayad bezarim az Singer kasi object ya nemune besaze
// $chertSinger = new Singer("chert pert");


// exceptions:
try {
    // your code here
    $fileContent = file_get_contents(__DIR__ . "/help.txt");
    if ($fileContent != 13) {
        throw new ContentMismatchException();
    }
    var_dump($fileContent);
} catch (ContentMismatchException $ex) {
    // do something!!!
    call_mamad();
    echo $ex->getCode();
    echo $ex->getMessage();
}

function call_mamad() {
    echo 'sms sent <br>';
}

///




