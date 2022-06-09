<?php
// use Model\PopSinger as pop; // alias 
use Model\PopSinger;
require_once(__DIR__ . "/src/Model/PopSinger.php");
require_once(__DIR__ . "/src/Model/ClassicalSinger.php");


// tarife khanande
// $mohsenYeganeh = new pop("Mohsen Yeganeh", "POP", true,["mosafer","didar"]); // using alias namespace
$mohsenYeganeh = new PopSinger("Mohsen Yeganeh", "POP", true,["mosafer","didar"]);
$mohsenYeganeh->setIsAlive(false);
$mohsenYeganeh->listAlbums();
$mohsenYeganeh->sing();

// calling static property
echo PopSinger::$AUTHOR;


$homayounShajarian = new Model\ClassicalSinger();


