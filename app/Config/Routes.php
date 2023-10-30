<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signin', 'LoginController::Login');