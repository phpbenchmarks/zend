<?php

use Zend\Mvc\Application;

chdir(dirname(__DIR__));

include __DIR__ . '/../vendor/autoload.php';
$appConfig = require __DIR__ . '/../config/application.helloworld.config.php';
Application::init($appConfig)->run();
