<?php
require_once __DIR__ . "/vendor/autoload.php";

use App\BusinessLogic\Flight;
use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


$logger = new Logger('mylogger');
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Level::Debug));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger


$flight = new Flight();
$flight->show();
$logger->info('show() is called');