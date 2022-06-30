<?php
// use Model\PopSinger as pop; // alias 
use App\Domain\PopSinger;
require_once(__DIR__ . "/src/Domain/PopSinger.php");
require_once(__DIR__ . "/src/Domain/ClassicalSinger.php");


// tarife khanande
// $mohsenYeganeh = new zpop("Mohsen Yeganeh", "POP", true,["mosafer","didar"]); // using alias namespace


// $mohsenYeganeh = new PopSinger();
// $mohsenYeganeh->setIsAlive(true);
$mohsenYeganeh = new PopSinger("Mohsen Yeganeh", "POP", true,["mosafer","didar"]);
$mohsenYeganeh->setIsAlive(false);
$mohsenYeganeh->listAlbums();
$mohsenYeganeh->sing();
$mohsenYeganeh->run();

// calling static property
echo PopSinger::$AUTHOR;


$homayounShajarian = new App\Domain\ClassicalSinger();


