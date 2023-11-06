<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\AdminController;
use App\Controllers\ApotekerController;
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


//Admin Routes
$routes->get('/adm', [AdminController::class, 'index']);

$routes->get('/signin', 'LoginController::Login');

$routes->get('/register', 'SignupController::signUp');

// Apoteker Controller
$routes->get('/apoteker/dashboard', [ApotekerController::class, 'index']);
$routes->get('/apoteker/resep', [ApotekerController::class, 'resep']);
$routes->get('/apoteker/stok', [ApotekerController::class, 'stok']);