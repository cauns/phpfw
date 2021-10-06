<?php declare(strict_types=1);

namespace MyFrame;

use FastRoute\RouteCollector;

require __DIR__ . '/../vendor/autoload.php';
$routes = include('../routers/router.php');

$app = new App($routes);
$app->init();