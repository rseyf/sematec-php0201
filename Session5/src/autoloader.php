<?php
// I need autoloader!
function basicClassLoader($className) {
    $lastSlash = strpos($className,"\\") + 1;
    $className = substr($className,$lastSlash);                               ;
    $dirAddress = str_replace("\\","/", $className);
    $classLocation = __DIR__ . "/" . $dirAddress . ".php";
    require_once($classLocation);
}
spl_autoload_register("basicClassLoader");
// only once!!
