<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
require_once '../vendor/autoload.php';

$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::DEBUG));

$logger->info('First message');

print("Ok");
?>