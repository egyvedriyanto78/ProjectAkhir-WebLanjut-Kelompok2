<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\AdminController;
use App\Controllers\DokterController;
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

$routes->get('/dokter', [DokterController::class,'show']);
$routes->get('/dokter/pasien', [DokterController::class,'tablePasien']);
$routes->get('/dokter/obat', [DokterController::class,'tableObat']);
$routes->get('/dokter', [DokterController::class, 'dashboard']);

//Admin Routes
$routes->get('/adm', [AdminController::class, 'index']);

$routes->get('/signin', 'LoginController::Login');

$routes->get('/register', 'SignupController::signUp');