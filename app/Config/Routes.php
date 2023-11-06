<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\AdminController;
use App\Controllers\ApotekerController;
use App\Controllers\LoginController;
use App\Controllers\SignupController;

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
$routes->get('/adm/dokter', [AdminController::class, 'dokter']);

//login routes
$routes->get('/signin', [LoginController::class, 'Login']);
$routes->post('/signin/store', [LoginController::class, 'store']);

//register routes
$routes->get('/register', [SignupController::class, 'signUp']);
$routes->post('/register/store', [SignupController::class, 'store']);


// Apoteker Controller
$routes->get('/apoteker/dashboard', [ApotekerController::class, 'index']);
$routes->get('/apoteker/resep', [ApotekerController::class, 'resep']);
$routes->get('/apoteker/stok', [ApotekerController::class, 'stok']);