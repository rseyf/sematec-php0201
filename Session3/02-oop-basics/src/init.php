<?php
use App\Domain\PopSinger;
use App\Domain\ClassicalSinger;


// todo: require once all related files
function rezaAutoloader($className) {
    $lastSlash = strpos($className,"\\") + 1;
    echo $className . "<br>";
    $className = substr($className,$lastSlash);
    echo $className . "<br>"                                                ;
    $dirAddress = str_replace("\\","/", $className);
    echo $dirAddress . "<br>";

    $classLocation = __DIR__ . "/" . $dirAddress . ".php";
    echo $classLocation;
    require_once($classLocation);
}

spl_autoload_register("rezaAutoloader");

$ebi = new PopSinger("Ebi","POP",true,["teste 1"],"GOl Ay khanoom gol");
$ebi->listAlbums();
$ebi->sing();
