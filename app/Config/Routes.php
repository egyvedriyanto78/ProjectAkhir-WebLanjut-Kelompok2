<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
/**
 * @var RouteCollection $routes
 */
// $routes->get('/user/create', [UserController::class,'create']);
$routes->get('/', [UserController::class,'index']);
$routes->get('/home', [UserController::class,'index']);
$routes->get('/about', [UserController::class,'about']);
$routes->get('/service', [UserController::class,'service']);
$routes->get('/team', [UserController::class,'doctor']);
$routes->get('/appointment', [UserController::class,'appointment']);

$routes->get('/signin', 'LoginController::Login');

$routes->get('/register', 'SignupController::signUp');

