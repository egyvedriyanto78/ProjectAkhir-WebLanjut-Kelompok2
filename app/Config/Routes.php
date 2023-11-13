<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\AdminController;

use App\Controllers\DokterController;
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

$routes->get('/dokter', [DokterController::class,'show']);
$routes->get('/dokter/pasien', [DokterController::class,'tablePasien']);
$routes->get('/dokter/obat', [DokterController::class,'tableObat']);
$routes->get('/dokter', [DokterController::class, 'dashboard']);

//Admin Routes
$routes->get('/adm', [AdminController::class, 'index']);
$routes->get('/adm/dokter', [AdminController::class, 'dokter']);
$routes->get('/adm/pasien', [AdminController::class, 'pasien']);
$routes->get('/adm/apoteker', [AdminController::class, 'apoteker']);
$routes->get('/adm/tentang', [AdminController::class, 'tentang']);
$routes->get('/adm/galeri', [AdminController::class, 'galeri']);
$routes->get('/adm/profil', [AdminController::class, 'profil']);
$routes->get('/adm/akun', [AdminController::class, 'akun']);


//login routes
$routes->get('/signin', [LoginController::class, 'Login']);
$routes->post('/signin/store', [LoginController::class, 'store']);


$routes->get('/register', 'SignupController::signUp');

//register routes
$routes->get('/register', [SignupController::class, 'signUp']);
$routes->post('/register/store', [SignupController::class, 'store']);

// Apoteker Controller
$routes->get('/apoteker/dashboard', [ApotekerController::class, 'index']);
$routes->get('/apoteker/resep', [ApotekerController::class, 'resep']);
$routes->get('/apoteker/stok', [ApotekerController::class, 'stok']);

