<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('/test', 'Test::index');

$routes->get('task', 'TaskController::index');
$routes->get('Xrie-drie', 'TaskController::layout');