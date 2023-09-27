<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// Show registration form
Route::get('/register', [RegistrationController::class, 'index'])->name('register');

// Handle registration
Route::post('/register', [RegistrationController::class, 'create']);



Route::get('/admin', function () {
    return view('admin.adminPanel');
})->name('admin');

Route::get('/home', function () {
    return view('admin.adminPanel');
})->name('home');
