<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Admin Routes
$routes->get('/super', [AdminController::class, 'index']);
$routes->get('/super/dashboard', [AdminController::class, 'dashboard']);
