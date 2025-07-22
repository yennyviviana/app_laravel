<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('auth.login');
});



// Rutas públicas de login y registro.....
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//rutas de recuperacion....
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');



// Ruta protegida: Dashboard.....
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Rutas del CRUD, protegidas con middleware 'auth'.....
Route::middleware(['auth'])->group(function () {
    Route::resource('empleados', EmpleadoController::class);
});


//rutas para el CRUD
Route::middleware(['auth'])->group(function () {
    Route::resource('empleados', EmpleadoController::class);
});


//ruta perfil
Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');


//configuracion
Route::get('/configuracion', function () {
    return view('configuracion');
})->name('configuracion');