<?php
session_start();

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

require ROOT . 'vendor/autoload.php';

require APP . 'config/config.php';

use App\Core\Application;

$app = new Application();
