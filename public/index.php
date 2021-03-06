<?php

define('CIRCULATE_BASE_PATH', dirname(__DIR__));

include CIRCULATE_BASE_PATH . '/vendor/autoload.php';

$logger = new Monolog\Logger('Tiny');
$logger->pushHandler(new Monolog\Handler\StreamHandler(CIRCULATE_BASE_PATH . DIRECTORY_SEPARATOR . '_storage' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'tiny.log'));
Monolog\ErrorHandler::register($logger);

if (file_exists(CIRCULATE_BASE_PATH . DIRECTORY_SEPARATOR . '.env')) {
    $dotenv = new Dotenv\Dotenv(CIRCULATE_BASE_PATH);
    $dotenv->load();
}

new Tiny\Tiny(CIRCULATE_BASE_PATH, $logger);