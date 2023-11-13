<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\AdminController;
use App\Controllers\DokterController;
use App\Controllers\ApotekerController;
use App\Controllers\LoginController;
use App\Controllers\SignupController;
use Myth\Auth\Config\Auth as AuthConfig;
use Config\Auth;

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

//dokter controller
$routes->get('/dokter', [DokterController::class,'show']);
$routes->get('/dokter/pasien', [DokterController::class,'tablePasien']);
$routes->get('/dokter/obat', [DokterController::class,'tableObat']);
$routes->get('/dokter', [DokterController::class, 'dashboard']);
$routes->get('/dokter/profile', [DokterController::class, 'profile']);
$routes->get('/dokter/form-pasien', [DokterController::class, 'showForm']);


//Admin Routes
// $routes->get('/adm', [AdminController::class, 'index']);
// $routes->get('/adm/dokter', [AdminController::class, 'dokter']);
$routes->get('/adm', [AdminController::class, 'index'], ['filter' =>'role:admin']);
$routes->get('/adm/dokter', [AdminController::class, 'dokter'], ['filter' =>'role:admin']);
$routes->get('/adm/pasien', [AdminController::class, 'pasien']);
$routes->get('/adm/apoteker', [AdminController::class, 'apoteker']);
$routes->get('/adm/tentang', [AdminController::class, 'tentang']);
$routes->get('/adm/galeri', [AdminController::class, 'galeri']);
$routes->get('/adm/profil', [AdminController::class, 'profil']);
$routes->get('/adm/akun', [AdminController::class, 'akun']);


//login routes
$routes->get('/signin', [LoginController::class, 'Login']);
$routes->post('/signin/store', [LoginController::class, 'store']);


// $routes->get('/register', 'SignupController::signUp');

//register routes
$routes->get('/register', [SignupController::class, 'signUp']);
$routes->post('/register/store', [SignupController::class, 'store']);

// Apoteker Controller
$routes->get('/apoteker/dashboard', [ApotekerController::class, 'index'], ['filter' =>'role:apoteker, admin']);
$routes->get('/apoteker/resep', [ApotekerController::class, 'resep'], ['filter' =>'role:apoteker, admin']);
$routes->get('/apoteker/stok', [ApotekerController::class, 'stok'], ['filter' =>'role:apoteker, admin']);
$routes->get('/apoteker/create_stok', [ApotekerController::class, 'create_stok'], ['filter' =>'role:apoteker, admin']);
$routes->post('/apoteker/store_stok', [ApotekerController::class, 'store_stok'], ['filter' =>'role:apoteker, admin']);


$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});

